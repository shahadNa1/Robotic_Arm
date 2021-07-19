# IBM Watson to convert text to speech 

In this project we will use the help of IBM watson services to convert text to speech 

# Text To Speech (TTS)

I used Jupyter Notebook in VScode. and in the step i want to convert our text into an audio using the following code lines, I started by creating passing the text into get function
(with open('./speech.mp3', 'wb') as audio_file:
    res = tts.synthesize('hi everyone thank you so much!', accept='audio/mp3', voice='en-US_AllisonV3Voice').get_result()
    audio_file.write(res.content)
    which will convert the text into the audio file and then save it under the name (winston.mp3) 
and the mp3 file will be found with the rest of the project files after running the code :

![image](https://user-images.githubusercontent.com/50388183/126089106-6145ba95-fb3d-40a5-b222-6657a56cd27f.png)

# MP3 FILE

After running the program it converted the after reading from a File automatically into mp3 file as you can hear in this video:

https://user-images.githubusercontent.com/50388183/126090266-003e55f7-ca94-4fac-a55e-1d8a54c5d477.mp4


# Text file 
After running the program it converted automatically into a text file

![image](https://user-images.githubusercontent.com/50388183/126090088-201cea45-8749-4ed8-a9e3-590fdfcd2851.png)
