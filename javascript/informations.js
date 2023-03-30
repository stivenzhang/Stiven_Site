//Todo outputs_used_for
const outputs = {
    "linux(Ubuntu)":
        "<div>Ubuntu is a popular open-source operating system based on the " +
        "Debian Linux distribution it's the operating system that we're using for this project</div>",
    docker:
        "    <div>\n" +
        "        Docker is a software platform that allows you to build, test, and deploy applications quickly, docker packages software into standardized units called containers that have everything the software needs to run including libraries, system tools, code, and runtime and is the software we're using to run the lamp for our web site\n" +
        "    </div>",
    git:
        "    <div>\n" +
        "        Git is a DevOps tool used for source code management it is free and open-source control system used to handle small to very large projects efficiently git is used to tracking changes in the source code, enabling multiple developers to work together on non-linear development\n" +
        "    </div>",
    MkCert:
        "    <div>\n" +
        "        MkCert is a simple tool for making locally-trusted development certificates. It requires no configuration.\n" +
        "    </div>",
    vim:
        "    <div>\n" +
        "        Vim Vi Improved is a text editor designed for use in a terminal window or console it is an enhanced version of the Vi editor developed in the 1970s as a part of the Unix operating system.\n" +
        "    </div>",

    apache:
        "    <div>\n" +
        "        Apache is the web server that processes requests and serves web assets and content via HTTP, mySQL is the database that stores all your information in an easily queried format, PHP is the programming language that works with apache to help create dynamic web content.\n" +
        "    </div>",
    mysql:
        "    <div>" +
        "       MySQL is a relational database management system developed by Oracle that is based on structured query language (SQL) a database is a structured collection of data" +
        "    </div>\n",
    php:
        "    <div>" +
        "       PHP is a server side scripting language that is embedded in HTML it is used to manage dynamic content, databases, session tracking ecc... it is integrated with a number of popular databases including MySQL" +
        "    </div>\n",
    html:
        "    <div>\n" +
        "        HTML is the standard markup language for describing the structure of documents displayed on the web HTML consists of a series of elements and attributes which are used to mark up all the components of a document to structure it in a meaningful way\n" +
        "    </div>",
    bootstrap:
        "    <div>\n" +
        "        Bootstrap is a free open source front-end development framework for the creation of websites and web apps designed to enable responsive development of mobile-first websites bootstrap provides a collection of syntax for template designs\n" +
        "    </div>",
    javascript:
        "    <div>\n" +
        "        JavaScript is a dynamic computer programming language it is lightweight and most commonly used as a part of web pages whose implementations allow client-side script to interact with the user and make dynamic pages it is an interpreted programming language with object-oriented capabilities\n" +
        "    </div>",
    aws:
        "    <div>\n" +
        "        AWS (Amazon Web Services) is a cloud computing platform developed by Amazon it provides a wide range of cloud-based service AWS offers a pay-as-you-go pricing model which allows users to only pay for the resources they use making it a cost-effective solution for businesses of all sizes.\n" +
        "    </div>",
    tutorial:
        "    <div>\n" +
        "       This is a step by step tutorial for AWS (amazon web service) LAMP (Linux, Apache, MySQL, PHP) with docker and auto redirect to https with a auto-certification first of all you need to go on the aws web site and create an account on " +
        "       <a href='https://aws.amazon.com/it/'>https://aws.amazon.com/it</a>\n" +
        "       After that follow there step: " +
        "       <p class='fw-bold'>1) Go to AWS Services and search for EC2</p>" +
        "       <img src=\"img/Aws_Services.png\" class='image' alt=\"\">" +
        "       <p class='fw-bold'>2) Click on Launch Instance</p>" +
        "       <img src=\"img/Launch_Instance.png\" class='image' alt=\"\">" +
        "       <p class='fw-bold'>3) Use Ubuntu as the os (operaiting system) and create a new pair of key with the Key pair type RSA and file format .pem and the name in out case is \"key\" and then Launch Instace</p>" +
        "       <img src=\"img/Operating_System.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Key_Pair.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Create_Key.png\" class='images4' alt=\"\">" +
        "       <img src=\"img/Launch.png\" class='images4' alt=\"\">" +
        "       <p class='fw-bold'>4) Now open the instance from the EC2 dashboard and go down to security open the security group click on edit inbound and add 2 rule with port 80 and 443 and the source to anywhere then save</p>" +
        "       <img src=\"img/EC2_Dashboard.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Instances.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Security.png\" class='images4' alt=\"\">" +
        "       <img src=\"img/Rules.png\" class='images4' alt=\"\">" +
        "       <p class='fw-bold'>5) Return to EC2 dashboard and open Elastic IPs click on Allocate Elastic IPs address go to the end and click allocate then click on action Associate Elastic IPs click on instance and the and use your and then click on private ip adress and click on the first then click associate</p>" +
        "       <img src=\"img/Elastic_IPs.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Allocate_Elastic_IPs.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Create_Elastic_IPs.png\" class='images4' alt=\"\">" +
        "       <img src=\"img/Associate_Elastic_IPs.png\" class='images4' alt=\"\">" +
        "       <img src=\"img/Associate_Elastic_Instance.png\" class='images4' alt=\"\">" +
        "       <p class='fw-bold'>6) Return to youe Instance and click on connect go to the ssh client and copy the example</p>" +
        "       <img src=\"img/Connect.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Ssh_Client.png\" class='images4 pb-3' alt=\"\">" +
        "       <p class='fw-bold'>7) Open the cmd (Command Prompt) and go to the folder of the key.pem and paste che example</p>" +
        "       <img src=\"img/Ssh_Connect.png\" class='images4 pb-3' alt=\"\">" +
        "       <p class='fw-bold'>8) Update and upgrade your ubuntu for more security</p>" +
        "       <img src=\"img/Sudo_Apt_Update.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Sudo_Apt_Upgrade.png\" class='image pb-3' alt=\"\">" +
        "       <p class='fw-bold'>9) Then we're going to clone a repostory from git hub with a docker lamp already setted then go to the folder and install docker-compose after that run cp sample.env .env to copy the sample we're going to start docker-compose with docker-compose up -d (d for detached)</p>" +
        "       <img src=\"img/Clone_Lamp.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Docker_Compose.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Copy_Sample.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Start_Docker_Compose.png\" class='image pb-3' alt=\"\">" +
        "       <p class='fw-bold'>10) Now we're going to the vhosts to change the default.conf with vim and with i where going to decomment the virtual hosts 443 and add the redirect the port 80 to the public ip that can be find in Connect Instace and then press esc :wq and enter</p>" +
        "       <img src=\"img/Vim_Default_Config.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Connect_Instance.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/Change_Default.png\" class='images4 pb-3' alt=\"\">" +
        "       <img src=\"img/wq.png\" class='images4 pb-3' alt=\"\">" +
        "       <p class='fw-bold'>11) Now return to config and go to ssl and install mkcert then run mkcert localhost 127.0.0.1 ::1 to crate the certificate and then rename them to cert.pem and cert-key.pem</p>" +
        "       <img src=\"img/Install_Mkcert.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Certificate.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Change_cert_name.png\" class='image pb-3' alt=\"\">" +
        "       <p class='fw-bold'>12) Now we're going to restart the instance and reconnect with the cmd in ssh and return and restart the docker-compose with sudo docker-compose up -d now when we connect ot the public ip we're going to see that we're only allowed to connect with https now we can go to the folder www and here we have all the php files and what is going to be seen on the web here we can clone a repostory that we are interested</p>" +
        "       <img src=\"img/Reboot.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Restart_compose.png\" class='image pb-3' alt=\"\">" +
        "       <img src=\"img/Repostory.png\" class='image pb-3' alt=\"\">" +
        "       <h1 class='text-warning'>Remenber that the default password of the root is tiger</h1>" +
        "    </div>",
}



//Todo outputs_commands
const outputs_command = {
    "linux(Ubuntu)":
        "    <div class=\"mt-4 border-bottom pb-4\">\n" +
        "        <div class=\"h3\">ls</div>\n" +
        "        <img src=\"img/ls.png\" class=\"image\" alt=\"\">\n" +
        "        <div>\n" +
        "            The ls command is used to list files or directories in Linux and other Unix-based operating systems.\n" +
        "        </div>\n" +
        "    </div>\n" +
        "\n" +
        "    <div class=\"mt-4 border-bottom pb-4\">\n" +
        "        <div class=\"h3 pt-2\">mkdir < directory ></div>\n" +
        "        <img src=\"img/mkdir.png\" class=\"image\" alt=\"\">\n" +
        "        <div>\n" +
        "            The mkdir command creates directories. This command can create multiple directories at once as well as set the permissions for the directories it is important to note that the user executing this command must have enough permissions to create a directory in the parent directory.\n" +
        "        </div>\n" +
        "    </div>\n" +
        "\n" +
        "    <div class=\"mt-4 border-bottom pb-4\">\n" +
        "        <div class=\"h3 pt-2\">apt < install//upgrade//update ></div>\n" +
        "        <img src=\"img/apt.png\" class=\"image\" alt=\"\">\n" +
        "        <div>\n" +
        "            The commands contained within apt provide the means for installing new software packages, upgrading existing software packages, updating the package list index, and even upgrading the entire Ubuntu system.\n" +
        "        </div>\n" +
        "    </div>\n" +
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3 pt-2\">mv < file//directory > < file//directory ></div>\n" +
        "    <img src=\"img/mv.png\" class=\"image\" alt=\"\">\n" +
        "    <div>\n" +
        "        The mv command is used for moving a file from one location to another in Ubuntu terminal. It can also be used to rename files if you move them to the same location but with a different name.\n" +
        "    </div>\n" +
        "</div>\n" +
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3 pt-2\">cp < file//directory > < file//directory ></div>\n" +
        "    <img src=\"img/cp.png\" class=\"image\" alt=\"\">\n" +
        "    <div>\n" +
        "        The cp command is used to create a copy of the contents of the file or directory specified by the Source parameters into the file or directory specified by the Target parameters.\n" +
        "    </div>\n" +
        "</div>\n" +
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3 pt-2\">cd < directory ></div>\n" +
        "    <img src=\"img/cd.png\" class=\"image\" alt=\"\">\n" +
        "    <div>\n" +
        "         The cd command is used to allow you to change directories.\n" +
        "    </div>\n" +
        "</div>\n" +
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3 pt-2\">sudo < commands ></div>\n" +
        "    <div>\n" +
        "        Sudo stands for super user do and is a command used to have the root access or as administrator.\n" +
        "    </div>\n" +
        "</div>\n",
    docker:
        "    <div class=\"mt-4 border-bottom pb-4\">\n" +
        "        <div class=\"h3\">docker-compose up</div>\n" +
        "        <img src=\"img/docker-compose-up.png\" class=\"image\" alt=\"\">\n" +
        "        <div>\n" +
        "            Docker-compose up is a Docker command to start and run an entire app on a standalone host that contains multiple services.\n" +
        "        </div>\n" +
        "    </div>",
    git:
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3\">clone</div>\n" +
        "    <img src=\"img/clone.png\" class=\"image\" alt=\"\">\n" +
        "    <div>\n" +
        "        Git clone is primarily used to point to an existing repo and make a clone or copy of that repo at in a new directory the original repository can be located on the local filesystem or on remote machine accessible supported protocols\n" +
        "    </div>\n" +
        "</div>\n" +
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3\">pull</div>\n" +
        "    <img src=\"img/pull.png\" class=\"image\" alt=\"\">\n" +
        "    <div>\n" +
        "        The git pull command is used to fetch and download content from a remote repository and immediately update the local repository to match that content.\n" +
        "    </div>\n" +
        "</div>\n",
    MkCert:
        "<div class=\"mt-4 border-bottom pb-4\">\n" +
        "    <div class=\"h3\">mkcert < filenames ></div>\n" +
        "    <img src=\"img/MkCert.png\" class=\"image\" alt=\"\">\n" +
        "    <div>\n" +
        "        The mkcert < filename > command is used to create certificates for hosts like example.test, localhost or 127.0.0.1\n" +
        "    </div>\n" +
        "</div>\n",
}


