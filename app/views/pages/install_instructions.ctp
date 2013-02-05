<h2 class="home"><a name="installation_instructions" id="installation_instructions">Installation Instructions</a></h2>
<br /><br />
<h1>Install Now</h1>
<div class="level2">
<br />
<img src="http://www.bodhilinux.com/images/installnow.png" class="floatleft" alt=" " />
<p class="containingbox"><strong>Bodhi Linux</strong> makes this method of installation so easy there is hardly any need for instructions at all. Just click the <strong>Install Now</strong> button on the page of the application you wish to install, enter your password in the pop-up window that appears and confirm that you do want to install the package in the next pop-up window. That&#039;s it! In a few minutes (or less) your new software will be ready to go.</p>

<p>The <strong>Install Now</strong> button also causes your system to do an <code>apt-get update</code> which ensures you get the most current package versions available. Note that it is <strong>necessary</strong> to use the <strong>Install Now</strong> button on a fresh install unless you have updated your system by another method.</p>
<p><div class="noteclassic"><strong>NOTE:</strong> This feature relies on “apt:url” to function. As such the <strong>only</strong> officially supported browsers are <strong>Midori</strong> and <strong>Firefox</strong>. Opera, Konqueror and maybe a few other Browsers can be configured to use “apt:url” but do not do so out of the box. Other browsers can still install software via the Download method.</div></p>
</div>

<h1>Quick Install</a></h1>
<br /><br />
<div class="level2">
<p>The <strong>Quick Install</strong> text link below the buttons will allow you to install a package without the <code>apt-get update</code> process.</p>
<p><div class="notewarning"><strong>This method will not work on a fresh install <em>unless</em> you have updated your sources list first!</strong></div></p>
</div>

<h1>Download Installer</h1>
<br /><br />
<div class="level2">
<img src="http://www.bodhilinux.com/images/downloadoffline.png" class="floatleft" alt=" " /><p class="containingbox">This method offers more flexibility (it will work with any browser) but also requires just a few more steps. Also, this method will allow installation at a later time and/or the ability to move the installer to another machine (on a USB stick for example). 
</p>
<p class="containingbox">Click the <strong>Download Button</strong> on the page of the application you wish to install and downloaded the <acronym title="Bodhi's Offline Installer">.bod</acronym> file making sure you note where you downloaded it to. There are different options for installating this .bod file:&nbsp;&nbsp; <a href="#gui_install">Graphical</a> or <a href="#cli_install">Command Line.</a> </p>
</div>

<h3><a name="gui_install" id="gui_install">Graphical Install</a></h3>
<br />
<div>
	
<div>
<img src="/img/gui_install1.png" class="floatright"   alt="" width="300" />
<p class="containingbox">Open <strong><acronym title="Enlightenment File Manager">EFM</acronym></strong> (the default file manager in <strong>Bodhi Linux</strong>) and navigate to the directory where you downloaded the file, in this example <em>ephoto.bod</em> for the <strong>ePhoto</strong> image viewer.</p><p class="containingbox"><em>Right-click</em> on the file and choose <em>File Properties.</em></p>
</div>
<img src="/img/gui_install2.png" alt=" " width="300" />
<div >
<br />
<p>Under the Permissions section click the box <em>execute</em> for your <em>User Name</em> then click <em>Apply</em>. </p>
<p>Then just double-click the file in the <strong>EFM</strong> window. You will be notified that the bod file is decompressing. Please wait.</p>
<p>You will be asked to confirm the installation and enter your password, after which the installer will run. When it is successfully completed a window will appear informing you where in the <strong>Main Menu</strong> your new application can be found.</p>
</div>
<p><div class="noteclassic"><strong>NOTE:</strong> You may need to restart <em>Enlightenment</em> before the application shows up in your menu.</div></p>
</div>

<h3><a name="cli_install" id="cli_install">CLI Install</a></h3>
<br />
<div>

<p>Open a Terminal and <code>cd</code> to the directory where the file was downloaded. Next, to change the file permissions to allow execution, type: </p>
<pre class="code"> 
 chmod 755 ephoto.bod 

</pre>

<p>Now run the installer:</p>
<pre class="code"> 
 ./ephoto.bod

</pre>

<p>The same confirmation/password windows from the <acronym title="Graphical User Interface">GUI</acronym> install will appear now, and end by informing you of the Main Menu location for the application when finished.</p>

</div>
