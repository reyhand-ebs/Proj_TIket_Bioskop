<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> 
  <!--Replace with your tailwind.css once created-->

</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('../img/bg.jpg');">



  <div class="max-w-3xl flex justify-center items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-rounded shadow-2xl bg-black text-white mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-center ">
			<!--Img Col-->
			<div class="inline-block w-full lg:w-1/3 "> 
				<!-- Big profile image for side bar (desktop) -->
				<img src="../img/user.jpg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
				<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->	
			</div>
			
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0 text-center">Your Name</h1>
			<div class="inline-block mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-blue-500 opacity-25"></div>
			<p class="pt-4 text-white text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 pr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg> 08xx xxxx xxxx</p>
			<p class="pt-2 text-white text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 pr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg> chikalmulia@gmail.com</p>
			<p class="pt-2 text-white text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 pr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>member</p>
			<a href="voucher.php"><p class="pt-2 text-white text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 pr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" /></svg>Voucher Saya</p></a>
			<a href="info.php"><p class="pt-2 text-white text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 pr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" /></svg>Info</p></a>

			<div class="pt-12 pb-8">
				<a href="editprofil.php"><button class="bg-blue-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
				  Edit Profile
				</button></a>
				<button class="bg-red-700 text-white font-bold py-2 px-4 rounded-full" id="delete-btn">
					Logout 
				</button>

				<div class="bg-black absolute inset-0 hidden justify-center items-center" id="overlay">
					<div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
						<div class="flex justify-between items-center">
							<h4 class="text-lg font-bold">Confirm Logout</h4>
							<svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd"
									d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
									clip-rule="evenodd"></path>
							</svg>
						</div>
						<div class="mt-2 text-sm">
							<p>Do you really want to log out?</p>
						</div>
						<div class="mt-3 flex justify-end space-x-3">
							<a href="index.php?p=home"><button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900">Yes</button></a> 
							<button class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded">No</button>
						</div>
					</div>
				</div>
				
				<script>
					window.addEventListener('DOMContentLoaded', () =>{
						const overlay = document.querySelector('#overlay')
						const delBtn = document.querySelector('#delete-btn')
						const closeBtn = document.querySelector('#close-modal')

						const toggleModal = () => {
							overlay.classList.toggle('hidden')
							overlay.classList.toggle('flex')
						}

						delBtn.addEventListener('click', toggleModal)

						closeBtn.addEventListener('click', toggleModal)
					})

				</script>
			</div>
		</div>

	</div>
</div>
</body>

</html>
