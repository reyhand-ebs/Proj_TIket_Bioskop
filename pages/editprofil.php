<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <!-- Tailwind css CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center items-center h-screen bg-cover" style="background-image:url('../img/bg.jpg');">
        <div id="form" class="block bg-slate-50 p-6 rounded-xl shodow-md shadow-slate-300 w-90">
            <form class="space-y-2" action="">
                <h2 class="text-black-700 text-3xl font-semibold my-4">Edit Profile</h2>
                    <!-- name -->
                    <div>
                        <label for="fname" class="text-sm">Name</label><br>
                        <input type="text" name="" id="fname"
                            class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                    </div>
                <div>
                <!-- email -->
                <label for="email" class="text-sm">Email</label><br>
                <input type="emial" name="" disabled value="" id="email" 
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                </div>
                <div>
                    <!-- no. handphone -->
                <label for="no.hp" class="text-sm">No. handphone</label><br>
                <input type="nohp" name="" id="nohp"
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                </div>
                <div>
                    <!-- password -->
                <label for="password" class="text-sm">Password</label><br>
                <input type="password" name="" disabled value="" id="password"
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                </div>
                <div>
                    <!-- confirm password -->
                <label for="confirmPassword" class="text-sm">Confirm Password</label><br>
                <input type="password" name="" disabled value="" id="confirmPassword"
                    class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm"><br>
                </div>
                <div>
                    <!-- Sign up / submit button -->
                <button class="rounded-full bg-sky-700 px-6 pb-2 pt-2.5 text-white">Save</button>
                <button class="rounded-full bg-rose-700 px-6 pb-2 pt-2.5 text-white">Cancel</button>
                </div>
              </form>
        </div>
    </div>
</body>

</html>