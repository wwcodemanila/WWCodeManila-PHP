<div class="justify-center m-6">
   <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 mb-6 md:mb-0 block  tracking-wide text-gray-700 text-xl font-bold mb-4">
         <h2>PHP Study Group on Laravel Livewire</h2>
         <hr>
      </div>
   </div>
   <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
         First Name
         </label>
         <input wire:model="firstName"
         class="appearance-none block w-full bg-gray-200 text-gray-700 border
         @error('firstName') border-red-500 @enderror 
         rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
          id="grid-first-name" type="text" placeholder="Maria">
          @error('firstName') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
      </div>
      <div class="w-full md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         Last Name
         </label>
         <input wire:model="lastName" 
         class="appearance-none block w-full bg-gray-200 text-gray-700 border 
         @error('lastName') border-red-500 @enderror 
         border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white 
         focus:border-gray-500" id="grid-last-name" type="text" placeholder="Dela Cruz">
         @error('lastName') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
      </div>
      <div class="w-full md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         Email
         </label>
         <input wire:model="email" 
         class="appearance-none block w-full bg-gray-200 text-gray-700 border 
         @error('email') border-red-500 @enderror 
         border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
         focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="name@gmail.com">
         @error('email') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
      </div>
      <div class="w-full py-2 px-3">
         <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
         Message
         </label>
         <textarea wire:model="message"  
          class="appearance-none block w-full bg-gray-200 text-gray-700 border
          @error('message') border-red-500 @enderror 
          border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white 
          focus:border-gray-500" id="grid-message"
          placeholder="Hi, I would like to learn about livewire and ..."
          rows=6 cols=4
          ></textarea>
         @error('message') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
      </div>

      <div class="w-full py-2 px-3">
         <button wire:click="addContactInquiry"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Volunteer
         </button>
      </div>
   </div>
   
</div>

