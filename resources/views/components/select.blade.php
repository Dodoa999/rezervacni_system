<div x-data="{
        selectOpen: false,
        selectedItem: null,
        selectableItems: [
            { title: 'Vyhlídkový let', value: 'Vyhlídkový let' },
            { title: 'Termický let', value: 'Termický let' },
            { title: 'Akrobatický let', value: 'Akrobatický let' },
            { title: 'Double tandem', value: 'Double tandem' },
            { title: 'Triple tandem', value: 'Triple tandem' },
            { title: 'Team building group', value: 'Team building group' },
        ],
        selectableItemActive: null,
        selectId: $id('select'),
        selectKeydownValue: '',
        selectKeydownTimeout: 1000,
        selectKeydownClearTimeout: null,
        selectDropdownPosition: 'bottom',
        init() {
            this.selectedItem = this.selectedItem ?? this.selectableItems[0];
        },
        selectableItemIsActive(item) {
            return this.selectedItem && this.selectedItem.value == item.value;
        },
        selectableItemActiveNext() {
            let index = this.selectableItems.indexOf(this.selectableItemActive);
            if (index < this.selectableItems.length - 1) {
                this.selectableItemActive = this.selectableItems[index + 1];
                this.selectScrollToActiveItem();
            }
        },
        selectableItemActivePrevious() {
            let index = this.selectableItems.indexOf(this.selectableItemActive);
            if (index > 0) {
                this.selectableItemActive = this.selectableItems[index - 1];
                this.selectScrollToActiveItem();
            }
        },
        selectScrollToActiveItem() {
            if (this.selectableItemActive) {
                let activeElement = document.getElementById(this.selectableItemActive.value + '-' + this.selectId);
                let newScrollPos = (activeElement.offsetTop + activeElement.offsetHeight) - this.$refs.selectableItemsList.offsetHeight;
                this.$refs.selectableItemsList.scrollTop = newScrollPos > 0 ? newScrollPos : 0;
            }
        },
        selectKeydown(event) {
            if (event.keyCode >= 65 && event.keyCode <= 90) {
                this.selectKeydownValue += event.key;
                let selectedItemBestMatch = this.selectItemsFindBestMatch();
                if (selectedItemBestMatch) {
                    if (this.selectOpen) {
                        this.selectableItemActive = selectedItemBestMatch;
                        this.selectScrollToActiveItem();
                    } else {
                        this.selectedItem = this.selectableItemActive = selectedItemBestMatch;
                    }
                }
                if (this.selectKeydownValue != '') {
                    clearTimeout(this.selectKeydownClearTimeout);
                    this.selectKeydownClearTimeout = setTimeout(() => {
                        this.selectKeydownValue = '';
                    }, this.selectKeydownTimeout);
                }
            }
        },
        selectItemsFindBestMatch() {
            let typedValue = this.selectKeydownValue.toLowerCase();
            let bestMatch = null;
            let bestMatchIndex = -1;
            for (let i = 0; i < this.selectableItems.length; i++) {
                let title = this.selectableItems[i].title.toLowerCase();
                let index = title.indexOf(typedValue);
                if (index > -1 && (bestMatchIndex == -1 || index < bestMatchIndex) && !this.selectableItems[i].disabled) {
                    bestMatch = this.selectableItems[i];
                    bestMatchIndex = index;
                }
            }
            return bestMatch;
        },
        selectPositionUpdate() {
            let selectDropdownBottomPos = this.$refs.selectButton.getBoundingClientRect().top + this.$refs.selectButton.offsetHeight + parseInt(window.getComputedStyle(this.$refs.selectableItemsList).maxHeight);
            this.selectDropdownPosition = window.innerHeight < selectDropdownBottomPos ? 'top' : 'bottom';
        }
    }"
    x-init="
        $watch('selectOpen', function() {
            if (!selectedItem) { 
                selectableItemActive = selectableItems[0];
            } else {
                selectableItemActive = selectedItem;
            }
            setTimeout(function() {
                selectScrollToActiveItem();
            }, 10);
            selectPositionUpdate();
            window.addEventListener('resize', (event) => { selectPositionUpdate(); });
        });
    "
    class="relative w-full">

    <!-- Skryté pole pro odeslání vybrané hodnoty -->
    <label for="select" class="block mb-1 text-sm font-medium text-neutral-500">Vyberte si typ letu</label>
    <input type="hidden" name="{{ $name }}" :value="selectedItem ? selectedItem.value : ''">

    <button x-ref="selectButton" @click.prevent="selectOpen = !selectOpen"
        class="relative min-h-[38px] flex items-center justify-between w-full py-2 pl-3 pr-10 text-left bg-white border rounded-md shadow-sm cursor-default border-neutral-200/70 focus:outline-none text-sm">
        <span x-text="selectedItem ? selectedItem.title : 'Vyberte typ letu'" class="truncate">Vyberte typ letu</span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-gray-400">
                <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd"></path>
            </svg>
        </span>
    </button>

    <ul x-show="selectOpen" x-ref="selectableItemsList" @click.away="selectOpen = false"
        x-transition:enter="transition ease-out duration-50"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100"
        :class="{ 'bottom-0 mb-10': selectDropdownPosition == 'top', 'top-0 mt-10': selectDropdownPosition == 'bottom' }"
        class="absolute w-full py-1 mt-1 overflow-auto text-sm bg-white rounded-md shadow-md max-h-56 ring-1 ring-black ring-opacity-5 focus:outline-none"
        x-cloak>

        <template x-for="item in selectableItems" :key="item.value">
            <li @click.prevent="selectedItem = item; selectOpen = false; $refs.selectButton.focus();"
                :id="item.value + '-' + selectId"
                :data-disabled="item.disabled"
                :class="{ 'bg-neutral-100 text-gray-900': selectableItemIsActive(item), '' : !selectableItemIsActive(item) }"
                @mousemove="selectableItemActive = item"
                class="relative flex items-center h-full py-2 pl-8 text-gray-700 cursor-default select-none hover:bg-neutral-100">
                <svg x-show="selectedItem && selectedItem.value == item.value" class="absolute left-0 w-4 h-4 ml-2 stroke-current text-neutral-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span class="block font-medium truncate" x-text="item.title"></span>
            </li>
        </template>

    </ul>

</div>