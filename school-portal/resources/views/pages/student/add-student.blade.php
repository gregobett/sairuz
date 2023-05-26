





@extends('layouts.home')
@section('content')

{{-- @livewireStyles

<div> <livewire:gradesectiondropdown></div>


@livewireScripts --}}
 <form method="post" action="{{url('save-student')}}" class="flex flex-col space-y-1" enctype="multipart/form-data">
                   
    @csrf
<div class="w-full  shadow-2xl rounded my-24 overflow-hidden">
    <div class="top h-60 w-full bg-blue-600 overflow-hidden relative" >
      <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
      <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        
        <img src="{{'uploads/students/profile-default.jpg'}}"  alt="image" class="h-24 w-24 object-cover rounded-full">
        <h1 class="text-2xl font-semibold"></h1>
        <h4 class="text-md font-semibold"></h4>
      </div>
    </div>

    <div class="grid grid-cols-12 bg-white dark:bg-dark-eval-1">
  
      <div class="col-span-12 w-full px-2 py-4 justify-center flex space-x-4 border-b border-solid md:space-x-0 dark:border-none md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">
  
      
        @livewireStyles
        <div class="form-item w-full"> <livewire:gradesectiondropdown></div>
        @livewireScripts
      
            <label class="hidden md:block uppercase tracking-wide text-gray-700 dark:text-white text-xs h-1 " for="photo">
                Add Photo
            </label>
       
            <div class="flex flex-col items-center justify-center gap-4 pr-3">
            <div class=" border-1 rounded-md mt- lg:border-2 bg-gre dark:border-none">
                <label>
                    <input type="file" class=" w-full text-sm md:text-md text-grey-500 p-2 text-gre
                    file:mr-2 ml-3 pl-2  file:py-0 file:px-2 file:lg:px-4 lg:pl-16 lg:ml-0
                    file:rounded-full file:border-0
                    file:text-md file:font-medium
                    file:bg-gre file:text-slate-50
                    hover:file:cursor-pointer hover:file:bg-gre
                    hover:file:text-blue-700
                    hover:bg-gre" id="photo" name="photo" required>
                </label>
            </div>

     
     
            <button type='submit' class=" w-full bg-gre hover:bg-gre text-sm md:text-md  mt-6 hover:text-blue-700 text-slate-50 border-gray-200 rounded p-2 pt-2 px-10 shadow-lg">
                Save
            </button>
            </div>
        
      </div>
  
    
      <div class="col-span-12 md:border-solid md:border-l  md:border-black md:border-opacity-25  h-full pb-12 md:col-span-10">
        <div class="px-4 pt-4">

            <div class="py-2">
              <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">Students basic information</h3>
              <hr>
            </div>
{{-- 
            @livewireStyles
            <div class="block form-item w-full flex-col md:hidden "> <livewire:gradesectiondropdown></div>
           
            @livewireScripts --}}
            
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

               
               
              
                {{-- lastname --}}
                <div class="form-item w-full ">
                    <label class="text-md ">Last Name</label>
                    <input type="text" value="{{old('lastname')}}" class="w-full  appearance-none text-black  rounded shadow py-1 px-2  mr-2 lg:mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="lastname" name="lastname" capitalize>
                    @error('lastname')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
            
                <div class="form-item w-full">
                    <label class="text-md ">First Name</label>
                    <input type="text" value="{{old('firstname')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="firstname" name="firstname" capitalize>
                    @error('firstname')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
                {{-- Middle name --}}
                <div class="form-item w-full">
                    <label class="text-md ">Middle Name</label>
                    <input type="text" value="{{old('middlename')}}" class="w-full appearance-none text-black rounded shadow py-1 px-2 mb-4 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="middlename" name="middlename" capitalize>
                    @error('middlename')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
            </div>    

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">  

                {{-- email --}}
                <div class="form-item w-full">
                    <label class="text-md ">Email</label>
                    <input type="text" value="{{Auth::user()->email}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 lg:mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200" id="email" name="email " disabled capitalize>
                    @error('email')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @enderror
                </div>                 
                
                {{-- Date of birth --}}
                <div class="form-item w-full">
                    <label class="text-md ">Date of Birth</label>
                    <input type="date" value="{{old('dateofbirth')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mb-4 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="dateofbirth" name="dateofbirth">
                    @error('dob')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <p>Date of birth field is required</p>
                        </div>
                      </div>
                      @enderror
                </div>
             
            </div>


            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                
                {{-- Phone --}}
                <div class="form-item w-full">
                    <label class="text-md ">Phone</label>
                    <input type="text" value="{{old('phone')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 lg:mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="phone" name="phone">
                    @error('phone')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}}
                        </div>
                      </div>
                      @enderror
                </div>
                
                {{-- Gender --}}
                <div class="form-item w-full">
                    <label class="text-md ">Gender</label>
                    <select class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="gender" name="gender" >
                        <option value="">Select</option>
                        <option value="Male" @if (old('gender') == "Male") {{ 'selected' }} @endif>Male</option>
                        <option value="Female" @if (old('gender') == "Female") {{ 'selected' }} @endif>Female</option>               
                    </select>
                    @error('gender')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                   
                </div>
                
                {{-- Religion --}}
                <div class="form-item w-full">
                    <label class="text-md ">Religion</label>
                    <input type="text" value="{{old('religion')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="religion" name="religion" capitalize>
                    @error('religion')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
                
                {{-- Nationality --}}
                <div class="form-item w-full">
                    <label class="text-md ">Nationality</label>
                    <input type="text" value="{{old('nationality')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mb-4 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="nationality" name="nationality" capitalize>
                    @error('nationality')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
    
            </div>

            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                
                {{-- Fathers Name --}}
                <div class="form-item w-full">
                    <label class="text-md ">Fathers Name</label>
                    <input type="text" value="{{old('fathersname')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white"  id="fathersname" name="fathersname" capitalize>
                    @error('fathersname')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
                
                {{-- Fathers Occupation --}}
                <div class="form-item w-full">
                    <label class="text-md ">Occupation</label>
                    <input type="text" value="{{old('foccupation')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="foccupation" name="foccupation" capitalize>
                    @error('foccupation')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <p>Fathers occupation field is required</p>
                        </div>
                      </div>
                      @enderror
                </div>
                
                {{-- Mothers Name --}}
                <div class="form-item w-full">
                    <label class="text-md ">Mothers Name</label>
                    <input type="text" value="{{old('mothersname')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="mothersname" name="mothersname" capitalize>
                    @error('mothersname')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                      </div>
                      @enderror
                </div>
                
                {{-- Mothers Occupation --}}
                <div class="form-item w-full">
                    <label class="text-md ">Occupation</label>
                    <input type="text" value="{{old('moccupation')}}" class="w-full appearance-none text-black  rounded shadow py-1 px-2 mb-4 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="moccupation" name="moccupation" capitalize>
                    @error('moccupation')
           
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <p>Mothers occupation field is required</p>
                        </div>
                      </div>
                      @enderror
                </div>
  
            </div>
            
            {{-- Address --}}
            <div class="form-item w-full">
                <label class="text-md ">Address</label>
                <textarea type="text"  class="w-full appearance-none text-black  rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white"  id="address" name="address">{{old('address')}}</textarea>
                @error('address')
           
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                  @enderror
           
            </div>

           

        </div>
     
      </div>
    </form>
    @include('sweetalert::alert')
    </div>

<style>
.table {
border-spacing: 0 15px;
}

i {
font-size: 1rem !important;
}

.table tr {
border-radius: 20px;
}

tr td:nth-child(n+5),
tr th:nth-child(n+5) {
border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
border-radius: .625rem 0 0 .625rem;
}
</style>
@endsection







