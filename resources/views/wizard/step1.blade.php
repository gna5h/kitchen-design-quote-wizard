<x-layout>
    <!-- Breadcrumb -->
    <nav class="step-breadcrumb" aria-label="Breadcrumb">
        <ol class="step-ol">
            <li class="step-li">
                <a class="step-li-a-left step-li-active pointer-events-none">
                    Kitchen Basics
                </a>
            </li>
            <li>
                <div class="step-li-a-container">
                    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a class="step-li-a-right pointer-events-none">
                        Contact & Quote
                    </a>
                </div>
            </li>
        </ol>
    </nav>

    <form class="step-form" method="POST" action="{{ route('wizard.step1') }}">
        @csrf

        <div class="step-textfield-container">
            <label for="length" class="step-label">Length (ft)</label>
            <input type="number" id="length" name="length" class="step-input" required />
        </div>

        <div class="step-textfield-container">
            <label for="width" class="step-label">Width (ft)</label>
            <input type="number" id="width" name="width" class="step-input" required />
        </div>

        <div class="step-textfield-container">
            <label for="width" class="step-label">Layout Type</label>
            <select id="layout-types" name="layout" class="step-select" required>
                <option value="L-shaped">L-Shaped</option>
                <option value="U-shaped">U-Shaped</option>
                <option value="Galley">Galley</option>
            </select>
        </div>

        <div class="step-textfield-container">
            <label for="color-preference" class="step-label">Basic Color Preference</label>
            <input type="color" id="color-preference" name="color" class="step-input h-52" required />
        </div>

        <div class="step-button-container">
            <button class="step-button">Next</button>
        </div>
    </form>
</x-layout>
