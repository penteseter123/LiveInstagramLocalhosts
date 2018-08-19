A PHP script that allows for you to go live on Instagram with any streaming program that supports RTMP!

Built with mgp25's amazing Instagram Private API Wrapper for PHP.

Note
This has been only tested on Windows, I have no clue if this works on UNIX-Based Systems. Feel free to try though!

Additionally, I've only tested this in OBS. Therefore, I highly recommend using it.

Setup
If you are running this after the first setup, work from step six on...

Install PHP, of course...
Install Composer
Clone the Repository
Run composer install in the cloned folder
Edit the Username and Password inside of config.php to your Instagram details
Run the goLive.php script. (php goLive.php)
Copy you Stream-URL and Stream-Key and paste them into your streaming software. See OBS-Setup
Video Tutorial
If you'd like a video version of this tutorial, see this video.

OBS-Setup
Go to the "Stream" section of your OBS Settings
Set "Stream Type" to "Custom Streaming Server"
Set the "URL" field to the stream url you got from the script
Set the "Stream key" field to the stream key you got from the script
Make Sure "Use Authentication" is unchecked and press "OK"
Start Streaming in OBS
To stop streaming, run the "stop" command in your terminal and then press "Stop Streaming" in OBS
Note: To emulate the exact content being sent to Instagram, set your OBS canvas size to 720x1280. This can be done by going to Settings->Video and editing Base Canvas Resolution to "720x1280"
