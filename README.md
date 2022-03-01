
  
  <div align="center"> 
    <h1>My E-portfolio</h1>

  ![Alt Text](https://media.giphy.com/media/E549VaHiMjknS/giphy.gif)
  </div>

<h1>Why ?</h1>
<p>During my second semester at the IUT we had to make our portfolio using a CMS. <br>As a developper showing off my dev skills with a website build using wix was kind of ironic. <br>Thats why in november i decided to build myself a complete portfolio to display my projects and more. </p>


 <h1>How does it work ?</h1>
 
<h3>Php / JS / CSS</h3>
<p> I coded this website using mainly html and css. All the files are .php tho because i made both footer and nav bar into separate files, this way i just have to include them on every new file.</p>
<p>The 4 sections composing the website (Home page, Projects, About, Contact) are all using different different background that i made myself. The home page is using p5.js a js library very usefull to make 2D canvas animations. The 3 other sections are made with three.js. I never used three.js before this project and it was a great way to learn how to use this library. I managed to learn how camera, shapes and render works. By digging a bit more i was able to create a timeline system letting me controll actions happening over the page at specific scroll %.
</p>

<h3>Hosting</h3>
<p>I didn't want to pay for hosting and i had some raspberry pi around my house, that's why i decided to learn how to self host a website. This was one of the best idea ! because this way i learn so much about hosting and internet in general. The first step was to secure my raspberry pi. I set up a firewall, removed the pi user, limited the sudo access, installed fail2ban. I didn't want to get my location leaked because of the server ip, that's why i learned how to use cloudflare dns proxy system to redirect connexion to my house.<br><br> <h3>Basic scheme : <br>user --> cloudflare --> my home server  <br>     my home server --> cloudflare --> user</h3><br> <br>This way cloudflare is not letting anybody see what's my home ip. </p>
 
 
<h3>Docker + github action</h3>

<p>I didn't knew that much about Dev-Ops before a hackaton i took part in february. After this event i started to use github action and docker on this portfolio. In fact it's totally overkill because it's way easier and less time consumming to use the ftp extension on visual studio code but it was more a way to learn how github workflows works.
After a lot of test i managed to setup a CI / CD pipeline using both github action and docker for my raspberry pi</p>




