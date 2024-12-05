<x-layout>
    <!-- Breadcrumb -->
    <nav class="step-breadcrumb" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('wizard.step1') }}" class="inline-flex items-center text-sm font-medium text-[#6484A6] hover:text-[#333333]">
                    Kitchen Basics
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="{{ route('wizard.step2') }}" class="ms-1 text-sm font-medium text-[#333333] hover:text-[#6484A6]">
                        Contact & Quote
                    </a>
                </div>
            </li>
        </ol>
    </nav>

    <form class="step-form" method="POST" action="{{ url('/wizard/step1') }}">
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
            <select id="layout-types" class="step-select">
                <option value="L-shaped">L-Shaped</option>
                <option value="U-shaped">U-Shaped</option>
                <option value="Galley">Galley</option>
            </select>
        </div>

        <div class="step-textfield-container">
            <label for="color-preference" class="step-label">Basic Color Preference</label>
            <input type="color" id="email" class="step-input h-52" required />
        </div>

        <div class="step-button-container">
            <button type="submit" class="step-button">Next</button>
        </div>

        {{-- <label>Length (ft):</label>
        <input type="number" name="length" required>
        <br>
        <label>Width (ft):</label>
        <input type="number" name="width" required>
        <br>
        <label>Layout Type:</label>
        <select name="layout" required>
            <option value="L-shaped">L-shaped</option>
            <option value="U-shaped">U-shaped</option>
            <option value="Galley">Galley</option>
        </select>
        <br>
        <label>Color Preference:</label>
        <input type="text" name="color" required>
        <br>
        <button type="submit">Next</button> --}}
    </form>
</x-layout>
