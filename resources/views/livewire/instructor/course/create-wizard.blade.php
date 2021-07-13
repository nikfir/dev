<div class="min-h-screen flex flex-col justify-between">


    <div class="h-24">
        <div class="z-10 w-full fixed">
            <div class="w-full h-16 bg-white dark:bg-darkest">
                /Instructor/Course/Create/
                {{ $page }}
            </div>

            <div class="w-full h-2 bg-light dark:bg-darker">
                <div class="w-1/3 h-full bg-primary rounded-full"></div>
            </div>
        </div>
    </div>

    <div class="h-full flex items-center justify-center">
      
        @if($page=='type')
            @livewire('instructor.course.create.type')
        @elseif($page == "info")
            @livewire('instructor.course.create.info')
        @endif
       
    </div>
    
    <div class="w-full h-28 flex items-center justify-center py-5">
    </div>
</div>

