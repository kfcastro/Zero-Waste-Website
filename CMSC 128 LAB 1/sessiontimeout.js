// Script for Session Logout after 5 minutes of inactivity from the user
$(function(){


	// check the time
    function time_checker(){

        // use jquery setInterval
        setInterval(function(){
            
            // every three seconds, read and store the last_time_stamp into store_time_stamp
            var stored_time_stamp = sessionStorage.getItem("last_time_stamp");  
            compare_time(stored_time_stamp);
        }, 3000);
    }

    // compare the stored_time_stamp with current time
    function compare_time(time_stamp){
        
        // equal to 5 minutes
        var expired_time = 5; 

        // get the current time
        var current_time = new Date();

        // get the time that passed from last activity of mouse (its from stored_time_stamp)
        var last_act_time  = new Date(time_stamp);

        // difference between current time and last_act_time
        var time_diff = current_time - last_act_time;

        // solve for how many minutes had already passed based from last activity (we need this 60000, since the time is in milliseconds)
        var minute_passed = Math.floor((time_diff/60000)); 

        // if minute_passed is greater or equal to the expired_time
        if(minute_passed >= expired_time ){

            // remove sessionStorage we created
            sessionStorage.removeItem("last_time_stamp");

            // use php to automatically force logout
            window.location = "./logout-forced.php";

            // to prevent the code from executing
            return false;
        } else {
            // display the time in the console log
            console.log(current_time + " - " + last_act_time + " = " + minute_passed + " min past");
        }
    }


    // use jquery method move mouse, when the mouse move, this function will record current the time and date of its activity
    $(document).mousemove(function(){

		// store time and date in time_stamp
		var time_stamp = new Date();

		// session storage object
		// to store the date and time, use html5 variable sessionStorage, and time and date is only available during active session
		// key = "last_time_stamp", value = time_stamp
		sessionStorage.setItem("last_time_stamp", time_stamp);
	});

	time_checker();

}); // end