
var skill = ["Programmer", "HTML5", "JavaScript", "CSS3", "Leadership", "Web Design", "Web Development", "Web Applications", "jQuery", "Bootstrap", "SQL", "Java", "Github", "Management", "Team Building", "Research"];
/* Object creation example */
var bio = {
	"name" : "Jonathan Blanco",
	"role" : "Web Developer",
	"contacts" : {
		"email": "jblan053@fiu.edu",
		"mobile": "111-111-1111",
		"github" : "https://github.com/jonathanblancor",
		"linkedin" : "https://www.linkedin.com/in/jonathan-blanco",
		"location": "Miami, FL"
	},
	"biopic" : "images/me.jpg",
	"welcomeMessage" : "Welcome to my resume online!",
	"skills" : skill
};

/* Creating objects using object literal notation (JSON) */
var education = {
	"firstName" : "Jonathan",
	"lastName" : "Blanco",
	"schools": [{
			"name" : "Florida International University",
			"location" : "Miami, FL",
			"degree" : "Bachelor of Science (B.S.)",
			"majors" : ["Information Technology"],
			"minors" : ["Physics"],
			"dates" : "2017",
			"url" : "http://www.fiu.edu/"
		}],
	"onlineCourses" : [{
			"title" : "Front End Web Developer",
			"school" : "Udacity",
			"dates" : "2016",
			"url" : "https://www.udacity.com"
		}]
};

var work = {
	"jobs" : [{
			"employer" : "Biorasi",
			"title" : "Front-end Developer with Back-end development experience",
			"location" : "Miami, FL",
			"dates": "May 2017-Present",
			"description" : "• Design user interface of the company proprietary platform, TALOS, using AngularJS. <br>• Program back-end for login (token-based authentication), security, and CRUD operations in C#. <br>•	Participate in test driven development to ensure quality of the platform. <br>• Examine and develop user acceptance tests ensuring the best user experience is delivered. <br>•	Improve and expand on a secure RESTful API that services a complex clinical trials application. <br>• Develop and maintain clean and organized documentation."
		}
		,{
			"employer" : "FIU",
			"title" : "Teaching Assitant",
			"location" : "Miami, FL",
			"dates": "2014-2017",
			"description" : "• Contributed to the stimulation of students in a high learning environment in programming. <br>• Developed students’ knowledge and improved their problem solving skills. <br>• Prepared activities engaging students in an interactive classroom and improving participation. <br>• Instructed students in Mathematics and Chemistry increasing their performance in class."
		},
		{
			"employer" : "NASA",
			"title" : "Summer Intern",
			"location" : "Cape Canaveral, FL",
			"dates": "June-August 2015",
			"description" : "• Programmed searching tool in VBA enabling data analysis time to be reduced by 70%. <br>• Supported and created concept of operations in the communication as well as the flow of data. <br>• Developed research skills by evaluating GUI tools that interfaced with MySQL. <br>• Documented the programs developed allowing users to easily install and use software."
		}]
};

var projects = {
	"projects" : [
	  {
			"title" : "NY Map app",
			"dates" : "September 2016",
			"description" : "• A single-page web application, built using the Knockout framework, that displays a Google Map of an area and various points of interest. <br>• Users can search all included landmarks and, when selected, additional information about a landmark is presented from the Wikipedia APIs.",
			"images": ["images/ny-map-min.png"],
			"url" : "https://jonathanblancor.github.io/map-app/"
	  },
	  {
			"title" : "Moving Planner app",
			"dates" : "August 2016",
			"description" : "• By using AJAX requests the app displays interactive information about any place you search through the APIs of the New York Times and Wikipedia. <br>• An image from Google Maps API is also displayed depending on the place searched.",
			"images": ["images/move-planner-min.png"],
			"url" : "https://jonathanblancor.github.io/moving-planner/"
  	},
	  {
			"title" : "Portfolio",
			"dates" : "July-August 2016",
			"description" : "• Developed a personal portfolio page using HTML, CSS, and the Bootstrap framework. <br>• It displays my recent projects and more will always be displayed. <br>• The page is fully responsive and works on mobile, tablet, and desktop browsers.",
			"images": ["images/portfolio-min.png"],
			"url" : "https://jonathanblancor.github.io/"
  	},
	  {
			"title" : "Game app",
			"dates" : "June-July 2016",
			"description" : "• An HTML5 Canvas powered video game. <br>• The game was developed using the best practices in Object Oriented JavaScript.",
			"images": ["images/arcade-game-min.png"],
			"url" : "https://jonathanblancor.github.io/arcade-game/"
	  },
	  {
			"title" : "Web Interface",
			"dates" : "May 2015",
			"description" : "• Designed front-end for the retrieval of information from a personally created database. <br>• Employed SQL, JavaScript, and HTML achieving a fresh design to interact with tables",
			"images" : [],
			"url" : "#"
		}
		// {
		// 	"title" : "Restaurant Menu",
		// 	"dates" : "December 2014",
		// 	"description" : "• Created GUI tool to simulate a restaurant registration system. • Programmed in Java with the Swing GUI Builder.",
		// 	"images" : ["images/restaurant_menu.JPG"]
		// },
		// {
		// 	"title" : "Bagels and Sudoku",
		// 	"dates" : "August 2014",
		// 	"description" : "• Designed logic-based games learning complex algorithms. • Coded in Java implementing friendly interface with well formatted program output.",
		// 	"images" : ["images/sudoku_3x3.JPG", "images/sudoku_9x9.JPG", "images/bagels.JPG"]
		// }
		]
};

//String to substituted from the helper.js file for real values
var data = "%data%";

bio.display = function() {

  //Show welcome message
	var formattedMsg = HTMLwelcomeMsg.replace(data, bio.welcomeMessage);
	$("#header").prepend(formattedMsg);

	//Show name and role
	var formattedName = HTMLheaderName.replace(data, bio.name);
	var formattedRole = HTMLheaderRole.replace(data, bio.role);
	$("#header").prepend(formattedRole);
	$("#header").prepend(formattedName);

	//Shows profile picture
	var formattedPic = HTMLbioPic.replace(data, bio.biopic);
	$("#header").prepend(formattedPic);

	//Show my contacts
	var formattedEmail = HTMLemail.replace(data, bio.contacts.email);
	$("#header ul, #footerContacts").append(formattedEmail);

	var formattedGithub = HTMLgithub.replace("#", bio.contacts.github);
 	formattedGithub = formattedGithub.replace(data, "JB on GitHub!");
	$("#header ul, #footerContacts").append(formattedGithub);

	var formattedLinkedin = HTMLlinkedin.replace("#", bio.contacts.linkedin);
	formattedLinkedin = formattedLinkedin.replace(data, "JB on LinkedIn!");
	$("#header ul, #footerContacts").append(formattedLinkedin);

	var formattedLocation = HTMLlocation.replace(data, bio.contacts.location);
	$("#header ul, #footerContacts").append(formattedLocation);

	//Shows my skills
	if (bio.skills.length > 0) {

		$("#header").append(HTMLskillsStart);

		bio.skills.forEach(function(skill) {
			var tempSkill = HTMLskills.replace(data, skill);
			$("#skills").append(tempSkill);
		});
	}
};

bio.display();

//Shows my work history
work.display = function() {
	var formattedEmployer, formattedJob, formattedLocation, formattedDate, formattedDescription;

	work.jobs.forEach(function(job) {

		$("#workExperience").append(HTMLworkStart);

		formattedEmployer = HTMLworkEmployer.replace(data, job.employer);
		formattedJob = HTMLworkTitle.replace(data, job.title);
		formattedLocation = HTMLworkLocation.replace(data, job.location);
		formattedDate = HTMLworkDates.replace(data, job.dates);
		formattedDescription = HTMLworkDescription.replace(data, job.description);

		$(".work-entry:last").append(formattedEmployer + formattedJob);
		$(".work-entry:last").append(formattedDate + formattedLocation);
		$(".work-entry:last").append(formattedDescription);
	});
};

work.display();

//Internationalizing my name. Ex: Jonathan Blanco to Jonathan BLANCO
$("#main").append(internationalizeButton);
function inName() {
	var nameArray = bio.name.split(" ");
	nameArray[1] = nameArray[1].toUpperCase();

	return nameArray[0] + " " + nameArray[1];
}

//Shows my projects
projects.display = function() {

	projects.projects.forEach(function(project, projIndex) {
		$("#projects").append(HTMLprojectStart);

		var temp = HTMLprojectTitle.replace(data, project.title);
		temp = temp.replace("#", project.url);
		$(".project-entry:last").append(temp);

		temp = HTMLprojectDates.replace(data, project.dates);
		$(".project-entry:last").append(temp);

		temp = HTMLprojectDescription.replace(data, project.description);
		$(".project-entry:last").append(temp);

		project.images.forEach(function(image, index) {
			temp = HTMLprojectImage.replace("%image%", "project"+projIndex+"-image"+index);
			temp = temp.replace(data, image);
			$(".project-entry:last").append(temp);
		});
	});
};

projects.display();

//Shows my education
education.display = function() {

	education.schools.forEach(function(school) {
		$("#education").append(HTMLschoolStart);

		var temp = HTMLschoolName.replace(data, school.name);
		temp = temp.replace("#", school.url);
		$(".education-entry:last").append(temp);

		temp = HTMLschoolDegree.replace(data, school.degree);
		$(".education-entry:last").append(temp);

		temp = HTMLschoolDates.replace(data, school.dates);
		$(".education-entry:last").append(temp);

		temp = HTMLschoolLocation.replace(data, school.location);
		$(".education-entry:last").append(temp);

		temp = HTMLschoolMajor.replace(data, school.majors);
		$(".education-entry:last").append(temp);
	});

	//This is for online courses
	$("#education").append("<br>");
	$("#education").append(HTMLonlineClasses);

	education.onlineCourses.forEach(function(course) {
		$("#education").append(HTMLschoolStart);

		var temp = HTMLonlineTitle.replace(data, course.title);
		temp = temp.replace("#", course.url);
		$(".education-entry:last").append(temp);

		temp = HTMLonlineSchool.replace(data, course.school);
		$(".education-entry:last").append(temp);

		temp = HTMLonlineDates.replace(data, course.dates);
		$(".education-entry:last").append(temp);

		temp = HTMLonlineURL.replace(data, course.url);
		temp = temp.replace("#", course.url);
		$(".education-entry:last").append(temp);
	});
};

education.display();

//Shows the map
$("#mapDiv").append(googleMap);
