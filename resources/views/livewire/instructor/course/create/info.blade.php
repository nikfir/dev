<div class="w-full max-w-lg flex flex-col items-center justify-center">
    <div class="px-5"><h1 class="font-mont font-semibold text-2xl text-darkest dark:text-lighter">What is this course about</h1></div>
    <div class="px-5"><p class="font-robo font-light text-xl text-dark text-center dark:text-light">Manage better by adding all relevant project information</p></div>
    <div class="w-full grid grid-cols-1 px-5 pt-8">
        <x-input.labelled-text class="mb-4" label="Course title"/>
        <x-input.labelled-text label="Course subtitle"/>
    
    </div>
    <div class="fixed bottom-0 w-full h-18 bg-white dark:bg-darkest flex items-center justify-between px-6">
        <button wire:click="continue" class="w-36 h-10 rounded-md bg-lightest dark:bg-darker border border-lightest hover:border-lighter dark:border-darkest font-robo text-base text-darkest dark:text-light hover:shadow-lg transform duration-300">Previous</button>
        <button wire:click="continue" class="w-36 h-10 rounded-md bg-primary font-robo text-base text-white hover:shadow-lg transform duration-300">Next</button>
    </div>
</div>
