<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            {{-- <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2> --}}
           
        </div>
    </x-slot>



       
<!-- component -->
<!-- <div class="h-screen bg-gray-50 flex items-start">
	<section class="bg-cover bg-center py-32 w-full" style="background-image: url('https://source.unsplash.com/random');">
		<div class="container mx-auto text-left text-white">
			<div class="flex items-center">
				<div class="w-1/2">
					<h1 class="text-5xl font-medium mb-6">Welcome to My Agency</h1>
					<p class="text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
						euismod odio, gravida pellentesque urna varius vitae.</p>
					<a href="#" class="bg-indigo-500 text-white py-4 px-12 rounded-full hover:bg-indigo-600">Demo</a>
				</div>
				<div class="w-1/2 pl-16">
					<img src="https://source.unsplash.com/random?ux" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
      </div>
				</div>
			</div>
	</section>
</div> -->
<!-- component -->
<section class="max-w-5xl mx-auto py-10">
   <div>
      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 1</div>
               <div class="text-gray-500 text-sm">Goals</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 1</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Set clear goals</div>
                  <div class="px-3 pb-6">Define what you want to achieve by finishing your studies. Determine the degree or qualification you are pursuing and understand the requirements for completion.</div>
               </div>
               <div class="md:w-96 w-full p-5 "><img src="images/goal.png" alt="step 1" class="object-scale-down dark:filter dark:brightness-75 "></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 2</div>
               <div class="text-gray-500 text-sm">Plan</div>
            </div>
            <div class="h-full border-r-4 border-transparent">
               <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 2</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Create a study plan</div>
                  <div class="px-3 pb-6">Develop a comprehensive study plan that outlines the courses you need to complete, the number of credits required, and the timeline for finishing each course. Consider factors such as workload, personal commitments, and available resources while creating your plan.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/plan.png" alt="step 2" class="object-scale-down dark:filter dark:brightness-75"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row-reverse">
         <div class="border-t-4 border-l-4 border-transparent">
            <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
      </div>

      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 3</div>
               <div class="text-gray-500 text-sm">Guidance</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 3</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Seek guidance</div>
                  <div class="px-3 pb-6"> Consult with academic advisors, professors, or mentors who can provide guidance on your academic path. They can help you understand course requirements, recommend study materials, and offer insights on career opportunities related to your field of study.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/guidance.png" alt="step 3" class="object-scale-down"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 4</div>
               <div class="text-gray-500 text-sm">Plan</div>
            </div>
            <div class="h-full border-r-4 border-transparent">
               <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 4</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Manage your time effectively</div>
                  <div class="px-3 pb-6">Develop good time management skills to balance your studies with other responsibilities. Create a schedule that allows for focused study sessions, breaks, and time for relaxation. Avoid procrastination and stick to your study plan.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/time.png" alt="step 4" class="object-scale-down dark:filter dark:brightness-75"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row-reverse">
         <div class="border-t-4 border-l-4 border-transparent">
            <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
      </div>

      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 5</div>
               <div class="text-gray-500 text-sm">Organized</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 5</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Stay organized</div>
                  <div class="px-3 pb-6">Keep track of deadlines, assignments, and exams by using a planner or digital tools. Organize your study materials, notes, and resources in a systematic manner. This will help you stay on top of your coursework and reduce stress.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/organized.png" alt="step 3" class="object-scale-down"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 6</div>
               <div class="text-gray-500 text-sm">Participate</div>
            </div>
            <div class="h-full border-r-4 border-transparent">
               <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 6</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Attend classes and participate actively</div>
                  <div class="px-3 pb-6">Regularly attend classes, engage in discussions, and actively participate in academic activities. This will enhance your understanding of the subject matter and improve your overall learning experience.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/participate.png" alt="step 2" class="object-scale-down dark:filter dark:brightness-75"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row-reverse">
         <div class="border-t-4 border-l-4 border-transparent">
            <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
      </div>

      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 7</div>
               <div class="text-gray-500 text-sm">Utilize</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 7</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Utilize available resources</div>
                  <div class="px-3 pb-6">Take advantage of libraries, online databases, and educational resources provided by your institution. Join study groups or form study partnerships with classmates to exchange knowledge and support each other.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/utilize.png" alt="step 3" class="object-scale-down"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 8</div>
               <div class="text-gray-500 text-sm">Plan</div>
            </div>
            <div class="h-full border-r-4 border-transparent">
               <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 8</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Create a study plan</div>
                  <div class="px-3 pb-6">Develop a comprehensive study plan that outlines the courses you need to complete, the number of credits required, and the timeline for finishing each course. Consider factors such as workload, personal commitments, and available resources while creating your plan.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/plan.png" alt="step 2" class="object-scale-down dark:filter dark:brightness-75"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row-reverse">
         <div class="border-t-4 border-l-4 border-transparent">
            <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
      </div>

      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 9</div>
               <div class="text-gray-500 text-sm">Guidance</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 9</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Seek guidance</div>
                  <div class="px-3 pb-6"> Consult with academic advisors, professors, or mentors who can provide guidance on your academic path. They can help you understand course requirements, recommend study materials, and offer insights on career opportunities related to your field of study.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/guidance.png" alt="step 3" class="object-scale-down"></div>
            </div>
         </div>
      </div>


      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 10</div>
               <div class="text-gray-500 text-sm">Plan</div>
            </div>
            <div class="h-full border-r-4 border-transparent">
               <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 10</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Create a study plan</div>
                  <div class="px-3 pb-6">Develop a comprehensive study plan that outlines the courses you need to complete, the number of credits required, and the timeline for finishing each course. Consider factors such as workload, personal commitments, and available resources while creating your plan.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/plan.png" alt="step 2" class="object-scale-down dark:filter dark:brightness-75"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row-reverse">
         <div class="border-t-4 border-l-4 border-transparent">
            <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
      </div>

      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 11</div>
               <div class="text-gray-500 text-sm">Guidance</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 11</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Seek guidance</div>
                  <div class="px-3 pb-6"> Consult with academic advisors, professors, or mentors who can provide guidance on your academic path. They can help you understand course requirements, recommend study materials, and offer insights on career opportunities related to your field of study.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/guidance.png" alt="step 3" class="object-scale-down"></div>
            </div>
         </div>
      </div>


      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 12</div>
               <div class="text-gray-500 text-sm">Plan</div>
            </div>
            <div class="h-full border-r-4 border-transparent">
               <div class="border-l-4 ml-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 12</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Create a study plan</div>
                  <div class="px-3 pb-6">Develop a comprehensive study plan that outlines the courses you need to complete, the number of credits required, and the timeline for finishing each course. Consider factors such as workload, personal commitments, and available resources while creating your plan.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/plan.png" alt="step 2" class="object-scale-down dark:filter dark:brightness-75"></div>
            </div>
         </div>
      </div>

      <div class="flex items-start flex-row-reverse">
         <div class="border-t-4 border-l-4 border-transparent">
            <div class="w-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-b-4 rounded-br-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-t-4 rounded-tl-full"></div>
      </div>

      <div class="flex flex-row">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded mr-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 13</div>
               <div class="text-gray-500 text-sm">Guidance</div>
            </div>
            <div class="h-full border-l-4 border-transparent">
               <div class="border-l-4 mr-4 h-full border-gray-300 border-dashed"></div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="md:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 13</span></div>
                  <div class="p-3 text-3xl text-gray-800 dark:text-gray-500 font">Seek guidance</div>
                  <div class="px-3 pb-6"> Consult with academic advisors, professors, or mentors who can provide guidance on your academic path. They can help you understand course requirements, recommend study materials, and offer insights on career opportunities related to your field of study.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/guidance.png" alt="step 3" class="object-scale-down"></div>
            </div>
         </div>
      </div>


      <div class="flex items-start flex-row">
         <div class="border-t-4 border-r-4 border-transparent">
            <div class="w-16 ml-16 h-16 border-l-4 border-gray-300 border-dashed border-b-4 rounded-bl-full"></div>
         </div>
         <div class="border-t-4 border-transparent flex-auto">
            <div class="h-16 border-b-4 border-gray-300 border-dashed"></div>
         </div>
         <div class="w-16 mt-16 mr-16 h-16 border-r-4 border-gray-300 border-dashed border-t-4 rounded-tr-full"></div>
      </div>

      <div class="flex flex-row-reverse">
         <div class="hidden md:flex flex-col items-center">
            <div class="w-32 py-5 border border-gray-300 rounded ml-4 uppercase flex flex-col items-center justify-center">
               <div class="text-3xl font-black text-gray-500">Step 14</div>
               <div class="text-gray-500 text-sm">Time</div>
            </div>
         </div>
         <div class="flex-auto border rounded  border-gray-300">
            <div class="flex lg:flex-row flex-col items-center">
               <div class="flex-auto">
                  <div class="sm:hidden text-sm font-normal uppercase pt-3 pl-3 text-gray-500"><span class="font-black">Step 14</span></div>
                  <div class="p-3 text-3xl text-gray-800 font dark:text-gray-500">Manage your time effectively</div>
                  <div class="px-3 pb-6">Develop good time management skills to balance your studies with other responsibilities. Create a schedule that allows for focused study sessions, breaks, and time for relaxation. Avoid procrastination and stick to your study plan.</div>
               </div>
               <div class="md:w-96 w-full p-5"><img src="images/time.png" alt="step 4" class="object-scale-down"></div>
            </div>
         </div>
      </div>

      
   </div>
</section>
  

   
        @yield('content')

    @include('sweetalert::alert')
</x-app-layout>
