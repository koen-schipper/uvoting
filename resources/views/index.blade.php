<x-app-layout>
    <div class="filters flex space-x-6">
        <div class='w-1/3'>
             <select name="category" id="category" class="w-full rounded-xl px-4 py-2 dark:bg-gray-700 text-gray-800 dark:text-gray-100 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
             </select>
        </div>
        <div class='w-1/3'>
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 dark:bg-gray-700 text-gray-800 dark:text-gray-100 border-none">
               <option value="Category One">Category One</option>
               <option value="Category Two">Category Two</option>
               <option value="Category Three">Category Three</option>
               <option value="Category Four">Category Four</option>
            </select>
       </div>
       <div class="w-2/3 relative">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-800 dark:text-gray-100" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100 placeholder-gray-800 dark:placeholder-gray-100 px-4 py-2 pl-8 border-none">
       </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-100 rounded-xl flex hover:shadow-md transition duration-150 ease-in">
            <div class="border-r border-gray-100 dark:border-gray-500 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-gray-500 dark:text-gray-100">12</div>
                    <div class="text-gray-500 dark:text-gray-100">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 border border-gray-200 hover:border-gray-400 bg-gray-200 text-gray-800 dark:border-gray-900 dark:hover:border-gray-500 dark:bg-gray-900 dark:text-gray-100 font-bold text-xs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class='flex-none'>
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class='text-xl font-semibold'>
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 dark:text-gray-100 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos sunt reprehenderit dolor eum nisi quia ratione alias omnis molestias aut distinctio ipsam eius facilis laborum, iure adipisci pariatur asperiores. Nulla doloribus quas optio harum nemo alias beatae veniam perspiciatis necessitatibus laboriosam consectetur excepturi dolorem velit quo magnam eius accusamus error vero sequi sunt impedit culpa, corrupti maiores. Fugiat in quibusdam nostrum voluptas saepe sapiente iure? Impedit vero repellat nobis quia debitis eligendi et vel veritatis maiores natus harum asperiores voluptatum dicta, distinctio eveniet deserunt eaque animi neque vitae aut saepe odio officia! Distinctio quaerat sequi, eveniet laboriosam vero a!</div>
                

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400 dark:text-gray-100">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900 dark:text-gray-400">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 dark:bg-gray-900 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="bg-gray-100 hover:bg-gray-200 dark:bg-gray-900 hover:dark:bg-gray-800 rounded-full h-7 px-3 transition duration-150 ease-in relative">
                                <svg style="color: rgb(122, 122, 122);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"> <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" fill="#7a7a7a"></path> </svg>
                                <ul class="absolute w-48 text-left ml-4 font-semibold bg-white dark:bg-gray-600 shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-gray-100 hover:dark:bg-gray-900 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 hover:dark:bg-gray-900 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
