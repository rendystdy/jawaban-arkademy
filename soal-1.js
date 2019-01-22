function biodata (){
    var myBiodata = {
        "name" : "Rendy Setiadi",
        "address" : "Jl. HOS. Cokroaminoto Gg. Bersatu No39",
        "hobbies" : ['bola','volly','badminton'],
        "is_married" : false,
        "school" : { 
                    "highschool" : "SMA MUJAHIDIN",
                    "university" : "Kampus BSI"
                   },
        "skills" : [
                     { 
                         "bahasa" : "html",
                         "level" : "menengah"
                     },
                     { 
                        "bahasa" : "css",
                        "level" : "menengah"
                    },
                    { 
                        "bahasa" : "php",
                        "level" : "pemula"
                    },
                    { 
                        "bahasa" : "javascript",
                        "level" : "pemula"
                    }
                   ]
    }

    console.log(myBiodata);
}

biodata();
