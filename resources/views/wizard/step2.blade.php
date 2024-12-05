<x-layout>
    <!-- Breadcrumb -->
    <nav class="step-breadcrumb" aria-label="Breadcrumb">
        <ol class="step-ol">
            <li class="step-li">
                <a class="step-li-a-left pointer-events-none">
                    Kitchen Basics
                </a>
            </li>
            <li>
                <div class="step-li-a-container">
                    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a class="step-li-a-right step-li-active pointer-events-none">
                        Contact & Quote
                    </a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="step-form mb-5">
        <div class="step-textfield-container !mb-0">
            <label for="summary" class="step-label">Summary</label>
            
            <hr class="step-horizontal-line">

            <div class="step-summary-selection-container">
                <p>Dimensions</p>
                <p>{{ $kitchen['length'] }} ft x {{ $kitchen['width'] }} ft</p>
            </div>
            <div class="step-summary-selection-container">
                <p>Layout</p>
                <p>{{ $kitchen['layout'] }}</p>
            </div>
            <div class="step-summary-selection-container flex-col gap-2">
                <p>Color</p>
                <input type="color" id="color-preference" name="color" class="step-input h-52" value="{{ $kitchen['color'] }}" disabled />
            </div>

            <hr class="step-horizontal-line">

            <div class="step-summary-selection-container">
                <label for="total" class="step-label">Total</label>
                <p>${{ $quote }}</p>
            </div>
        </div>
    </div>

    <form class="step-form" method="POST" action="{{ route('wizard.step2') }}">
        @csrf

        <label for="summary" class="step-label">Personal Details</label>

        <hr class="step-horizontal-line">

        <div class="step-textfield-container">
            <label for="email" class="step-label">Email</label>
            <input type="email" id="email" name="email" class="step-input" required />
        </div>

        <div class="step-textfield-container">
            <label for="name" class="step-label">Name</label>
            <input type="text" id="name" name="name" class="step-input" required />
        </div>

        <hr class="step-horizontal-line">

        <div class="step-button-container flex">
            <a href="javascript:history.back()" class="step-button flex-1 text-center">Back</a>
            <button class="step-button flex-1 text-center">Submit</button>
        </div>        
    </form>
</x-layout>
