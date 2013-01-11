<h2 class="sectionedit1"><a name="installation_instructions" id="installation_instructions">Installation Instructions</a></h2>
<div class="level1">

</div>

<h1 class="sectionedit2"><a name="install_now" id="install_now">Install Now</a></h1>
<div class="level2">

<p>
<img src="http://www.bodhilinux.com/images/installnow.png" class="medialeft" align="left" alt="" /><strong>NOTE</strong> This feature relies on “apt:url” to function. As such the <strong>only</strong> supported browsers are <strong>Midori</strong> and <strong>Firefox</strong>. Other browsers can still install software via the Download method.
</p>

<p>
<strong>Bodhi Linux</strong> makes this method of installation so easy there is hardly any need for instructions at all. Just click the <strong>Install Now</strong> button on the page of the application you wish to install, enter your password in the pop-up window that appears, and confirm that you do want to install the package in the next pop-up window. That&#039;s it! In a few minutes (or less) your new software will be ready to go.

</p>

<p>
The <strong>Install Now</strong> button also causes your system to do an <code>apt-get update</code> which ensures you get the most current package versions available. Note that it is <strong>necessary</strong> to use the <strong>Install Now</strong> button on a fresh install unless you have updated your system by another method. 
</p>

</div>

<h1 class="sectionedit3"><a name="fast_install" id="fast_install">Quick Install</a></h1>
<div class="level2">

<p>

The <strong>Quick Install</strong> text link below the buttons will allow you to install a package without the <code>apt-get update</code> process.
</p>

<p>
<strong>This method will not work on a fresh install!</strong>
</p>

</div>

<h1 class="sectionedit4"><a name="download_installer" id="download_installer">Download Installer</a></h1>
<div class="level2">

<p>
<img src="http://www.bodhilinux.com/images/downloadoffline.png" class="medialeft" align="left" alt="" />This method offers more flexibility (it will work with any browser) but also requires just a few more steps. Also, this method will allow installation at a later time and/or the ability to move the installer to another machine (on a USB stick for example). 
</p>

<p>

Once you have downloaded the .bod file you want (make sure you note where you downloaded it to), there are 2 options for installation: Graphical or Command Line. 
</p>

</div>

<h3 class="sectionedit5"><a name="gui_install" id="gui_install">GUI Install</a></h3>
<div class="level3">

<p>

<img src="/img/gui_install1.png" class="media" alt="" width="300" />
</p>

<p>
Open <strong>PCManFM</strong> (the default file manager in <strong>Bodhi Linux</strong>) and navigate to the directory where you downloaded the file, in this example midori.bod for the <strong>Midori</strong> web browser. <em>Right-click</em> on the file and choose <em>Properties.</em>

</p>

<p>
<img src="/img/gui_install2.png" class="media" alt="" width="300" />
</p>

<p>
Under the Permissions tab tick the box <em>Make the file executable</em> then click <em>OK</em>. 
</p>

<p>
<img src="/img/gui_install3.png" class="media" alt="" width="300" />

</p>

<p>
Then just double-click the file in the <strong>PCManFM</strong> window. You will be prompted what action to take; choose <em>Execute</em>
</p>

<p>
You will be asked to confirm the installation and enter your password, after which the installer will run. When it is completed a window will appear informing you where in the <strong>Main Menu</strong> your new application can be found.
</p>

</div>

<h3 class="sectionedit6"><a name="cli_install" id="cli_install">CLI Install</a></h3>
<div class="level3">

<p>

Open a Terminal and <code>cd</code> to the directory where the file was downloaded. To change the permission to allow execution, type: 

</p>
<pre class="code"> chmod 755 midori.bod </pre>

<p>

To run the installer type:

</p>
<pre class="code"> ./midori.bod</pre>

<p>

The same confirmation/password windows from the <acronym title="Graphical User Interface">GUI</acronym> install will appear now, and end by informing you of the Main Menu location for the application when finished.
</p>

</div>
