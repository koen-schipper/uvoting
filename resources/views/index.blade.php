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
</x-app-layout>
