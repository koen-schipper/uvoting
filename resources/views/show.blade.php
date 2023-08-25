<x-app-layout>
   <div>
    <a href="/" class="flex items-center font-semibold hover:underline">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        <span class="ml-2">All Ideas</span>    
    </a>    
</div> 
<div class="idea-container bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100 rounded-xl flex mt-4">
    <div class="flex flex-1 px-6 py-6">
                <a href="#" class='flex-none'>
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4 w-full">
                    <h4 class='text-xl font-semibold'>
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 dark:text-gray-100 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos sunt reprehenderit dolor eum nisi quia ratione alias omnis molestias aut distinctio ipsam eius facilis laborum, iure adipisci pariatur asperiores. Nulla doloribus quas optio harum nemo alias beatae veniam perspiciatis necessitatibus laboriosam consectetur excepturi dolorem velit quo magnam eius accusamus error vero sequi sunt impedit culpa, corrupti maiores. Fugiat in quibusdam nostrum voluptas saepe sapiente iure? Impedit vero repellat nobis quia debitis eligendi et vel veritatis maiores natus harum asperiores voluptatum dicta, distinctio eveniet deserunt eaque animi neque vitae aut saepe odio officia! Distinctio quaerat sequi, eveniet laboriosam vero a!</div>
                

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400 dark:text-gray-100">
                            <div>John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900 dark:text-gray-400">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow dark:bg-yellow text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In Progress
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 hover:dark:bg-gray-800 rounded-full h-7 px-3 transition duration-150 ease-in relative">
                                <svg style="color: rgb(122, 122, 122);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" fill="#7a7a7a"></path> </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="buttons-container flex items-center justify-between mt-6">
        <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
            <span class='ml-1'>Submit</span>
        </button>
    </div>
</x-app-layout>
