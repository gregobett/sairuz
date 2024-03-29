@extends('layouts.home')
@section('content')

<!-- component -->

{{-- *****************************FIRST QUARTER****************************************** --}}
{{-- <h6 class="block w-full text-center text-gray-800 text-2xl  mb-6">{{ $data->lastname}}, {{ $data->firstname}}</h6> --}}
<div class="flex justify-center items-center w-full bg-white dark:bg-[#222738] overflow-hidden">
  <div class="w-1/8 bg-white rounded shadow-2xl p-8 m-4 dark:bg-[#222738]">
      <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6 dark:text-gray-300">First Quarter</h1>
      <form action="{{url('update-firstquarter')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" />
        <input type="hidden" value="{{ $data->user_id }}" name="user_id" />

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="mothertongue">Mother Tongue</label>
                <input value="{{$data->mothertongue}}" class="border py-0 w-24  dark:bg-gray-800" type="text" name="mothertongue" id="mothertongue" >
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="filipino">Filipino</label>
                <input value="{{$data->filipino}}" class="border py-0 w-24  dark:bg-gray-800" type="text" name="filipino" id="filipino">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="english">English</label>
                <input value="{{$data->english}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="english" id="english">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-xs lg:text-sm text-gray-900" for="mathematics">Mathematics</label>
                <input value="{{$data->mathematics}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="mathematics" id="mathematics">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-xs lg:text-sm text-gray-900" for="science">Science</label>
                <input value="{{$data->science}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="science" id="science">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="ap">Araling Panlipunan</label>
                <input value="{{$data->ap}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="ap" id="ap">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="esp">Edukasyon sa Pagpapalkatao</label>
                <input value="{{$data->esp}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="esp" id="esp">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="music">Music</label>
                <input value="{{$data->music}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="music" id="music">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-xs lg:text-sm text-gray-900" for="arts">Arts</label>
                <input value="{{$data->arts}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="arts" id="arts">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-xs lg:text-sm text-gray-900" for="pe">Physical Educataion</label>
                <input value="{{$data->pe}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="pe" id="pe">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold  text-xs lg:text-sm text-gray-900" for="health">Health</label>
                <input value="{{$data->health}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="health" id="health">
            </div>

            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-xs lg:text-sm text-gray-900" for="epp">Edukasyon Pantahanan at Pangkabuhayan</label>
                <input value="{{$data->epp}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="epp" id="epp">
            </div>
            
            <div class="flex mb-4 shadow-lg">
                <label class="w-full p-1 pl-2  bg-gray-200 dark:bg-gray-600 dark:text-gray-400 font-bold text-xs lg:text-sm text-gray-900" for="tle">Technology and Livelihood Education</label>
                <input value="{{$data->tle}}" class="border py-0 w-24 dark:bg-gray-800" type="text" name="tle" id="tle">
            </div>
        
        
            <div class="flex-between items-center justify-center">
                <button class="block w-full bg-gre  text-white text-sm mx-auto p-1 hover:text-amber-700 rounded py-1.5 mb-2 px-5 dark:bg-[#222738] dark:shadow-xl border" type="submit">Save</button>
                <a href="{{url('edit-student-faculty/'.$data->user_id )}}" type="btn" class="bg-gre text-sm  text-slate-50  hover:text-amber-700 border-gray-200 rounded py-1 px-5 shadow-lg flex  justify-center dark:bg-[#222738] dark:shadow-xl border">Back</a>
            </div>
        </form>
  </div>

</div>

@endsection
