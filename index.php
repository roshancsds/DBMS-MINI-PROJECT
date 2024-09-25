<!DOCTYPE html>
<html>
<head>
  <title>Student Feedback</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
      window.scrollTo(0, 1);
    }

    function updateSubjects() {
      const branch = document.getElementById("branch").value;
      const sem = document.getElementById("sem").value;
      const year = document.getElementById("year").value;
      const subject = document.getElementById("subject");
      subject.innerHTML = "";

      const subjects = {
        "CSE-2023-1st": ["Introduction to Programming", "Mathematics I", "Physics", "Engineering Graphics"],
        "CSE-2023-2nd": ["Data Structures", "Mathematics II", "Chemistry", "Basic Electronics"],
        "CSE-2024-3rd": ["Object Oriented Programming", "Digital Logic Design", "Mathematics III", "Operating Systems"],
        "CSE-2024-4th": ["Analysis & Design of Algorithms", "Microcontrollers", "Database Management System", "Discrete Mathematical Structures"],
        "CSE-2025-5th": ["Advanced Algorithms", "Operating Systems", "Computer Networks"],
        "CSE-2025-6th": ["Software Engineering", "Compiler Design", "Computer Graphics"],
        "CSE-2026-7th": ["Machine Learning", "Cloud Computing", "Information Security"],
        "CSE-2026-8th": ["Advanced Computer Networks", "IoT Security", "Blockchain Technology"],
        "ISE-2023-1st": ["Introduction to Programming", "Mathematics I", "Physics", "Engineering Graphics"],
        "ISE-2023-2nd": ["Data Structures", "Mathematics II", "Chemistry", "Basic Electronics"],
        "ISE-2024-3rd": ["Object Oriented Programming", "Digital Logic Design", "Mathematics III", "Operating Systems"],
        "ISE-2024-4th": ["Software Engineering", "Operating Systems", "Computer Networks", "Data Structures"],
        "ISE-2025-5th": ["Advanced Software Engineering", "System Programming"],
        "ISE-2025-6th": ["Web Technologies", "Data Warehousing", "Artificial Intelligence"],
        "ISE-2026-7th": ["Network Security", "Software Testing", "Cloud Computing"],
        "ISE-2026-8th": ["Cyber Physical Systems", "Software Project Management", "Big Data Analytics"],
        "DS-2023-1st": ["Introduction to Programming", "Mathematics I", "Physics", "Engineering Graphics"],
        "DS-2023-2nd": ["Data Structures", "Mathematics II", "Chemistry", "Basic Electronics"],
        "DS-2024-3rd": ["Object Oriented Programming", "Digital Logic Design", "Mathematics III", "Operating Systems"],
        "DS-2024-4th": ["Data Science Fundamentals", "Machine Learning", "Big Data Analytics", "Statistics for Data Science"],
        "DS-2025-5th": ["Advanced Machine Learning", "Data Mining"],
        "DS-2025-6th": ["Deep Learning", "Data Visualization", "Natural Language Processing"],
        "DS-2026-7th": ["Predictive Analytics", "Reinforcement Learning", "Data Privacy"],
        "DS-2026-8th": ["Data Ethics", "Quantum Computing", "Advanced Data Structures"],
        "AIML-2023-1st": ["Introduction to Programming", "Mathematics I", "Physics", "Engineering Graphics"],
        "AIML-2023-2nd": ["Data Structures", "Mathematics II", "Chemistry", "Basic Electronics"],
        "AIML-2024-3rd": ["Object Oriented Programming", "Digital Logic Design", "Mathematics III", "Operating Systems"],
        "AIML-2024-4th": ["Introduction to AI", "Deep Learning", "Natural Language Processing", "Computer Vision"],
        "AIML-2025-5th": ["Advanced AI", "Robotics"],
        "AIML-2025-6th": ["Machine Learning", "Neural Networks", "AI Ethics"],
        "AIML-2026-7th": ["AI in Healthcare", "AI in Finance", "Explainable AI"],
        "AIML-2026-8th": ["AI Governance", "Advanced Robotics", "Cognitive Computing"],
        "IOT-2023-1st": ["Introduction to Programming", "Mathematics I", "Physics", "Engineering Graphics"],
        "IOT-2023-2nd": ["Data Structures", "Mathematics II", "Chemistry", "Basic Electronics"],
        "IOT-2024-3rd": ["Object Oriented Programming", "Digital Logic Design", "Mathematics III", "Operating Systems"],
        "IOT-2024-4th": ["IoT Architecture", "Cybersecurity Basics", "Embedded Systems", "Wireless Communication"],
        "IOT-2025-5th": ["Advanced IoT", "Network Security"],
        "IOT-2025-6th": ["IoT Protocols", "IoT Data Analytics", "IoT Security"],
        "IOT-2026-7th": ["Smart Cities", "Industrial IoT", "IoT and Cloud"],
        "IOT-2026-8th": ["IoT in Agriculture", "Smart Grid Technology", "IoT Ecosystems"],
      };

      const key = `${branch}-${year}-${sem}`;
      if (subjects[key]) {
        subjects[key].forEach(function (sub) {
          const option = document.createElement("option");
          option.value = sub;
          option.text = sub;
          subject.appendChild(option);
        });
      }
    }
  </script>
  <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
  <style>
      body {
        background-image: url('https://i.redd.it/us5eg5hb2wh91.gif'); /* Replace with your image path */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }
    </style>
</head>
<body>
  <form action="php/admin.php" method="POST">
    <div class="admin-login">
      <input type="submit" name="admin" value="Admin" id="admin" />
    </div>
  </form>

  <h1 class="main-heading">Student Feedback Form</h1>

  <div class="container">
    <h3>Fill this student feedback form so that we can make our teaching better.</h3>

    <form action="php/feedback.php" method="post" class="student-form">
      <div class="student-details">
        <label for="year">Academic Year</label>
        <select name="year" id="year" onchange="updateSubjects()">
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
          <option value="2026">2026</option>
        </select>
        <br />

        <label for="sem">Semester</label>
        <select name="sem" id="sem" onchange="updateSubjects()">
          <option value="1st">Sem 1</option>
          <option value="2nd">Sem 2</option>
          <option value="3rd">Sem 3</option>
          <option value="4th">Sem 4</option>
          <option value="5th">Sem 5</option>
          <option value="6th">Sem 6</option>
          <option value="7th">Sem 7</option>
          <option value="8th">Sem 8</option>
        </select>
        <br />

        <label for="date">Date of Feedback</label>
        <input type="date" id="date" name="date" />
        <br />

        <label for="branch">Branch</label>
        <select name="branch" id="branch" onchange="updateSubjects()">
          <option value="CSE">CSE</option>
          <option value="ISE">ISE</option>
          <option value="DS">CSE(DATA SCIENCE)</option>
          <option value="AIML">AIML</option>
          <option value="IOT">CSE(IOT & CYBERSECURITY)</option>
        </select>
        <br />

        <label for="section">Section</label>
        <select name="section" id="section">
          <option value="A">Sec A</option>
          <option value="B">Sec B</option>
          <option value="-">-</option>
        </select>
        <br />
        
        <label for="subject">Subject</label>
        <select name="subject" id="subject">
          <!-- Default subjects for initial load, updated by JavaScript -->
          <option value="Introduction to Programming">Introduction to Programming</option>
          <option value="Mathematics I">Mathematics I</option>
          <option value="Physics"> Physics</option>
          <option value="Engineering Graphics">Engineering Graphics</option>



        </select>
        <br />
      </div>


      <div class="student-feedback">
          <!-- Question 1 -->
          <h4>
            1) Has the Teacher covered entire Syllabus as prescribed by
            University?
          </h4>
          <label>
            <input type="radio" id="ques-1-5" name="ques1" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-1-4" name="ques1" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-1-3" name="ques1" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-1-2" name="ques1" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-1-1" name="ques1" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 2 -->
          <h4>2) Effectiveness of Teacher in terms of:</h4>
          <!-- Question 2-i -->
          <h4>i. Technical Content</h4>
          <label>
            <input type="radio" id="ques-2i-5" name="ques-2i" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-2i-4" name="ques-2i" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-2i-3" name="ques-2i" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-2i-2" name="ques-2i" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-2i-1" name="ques-2i" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 2-ii -->
          <h4>ii. Communication Skills</h4>
          <label>
            <input type="radio" id="ques-2ii-5" name="ques-2ii" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-2ii-4" name="ques-2ii" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-2ii-3" name="ques-2ii" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-2ii-2" name="ques-2ii" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-2ii-1" name="ques-2ii" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 2-iii -->
          <h4>
            iii. Availability beyond normal classes and co-operation to solve
            individual problems
          </h4>
          <label>
            <input type="radio" id="ques-2iii-5" name="ques-2iii" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-2iii-4" name="ques-2iii" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-2iii-3" name="ques-2iii" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-2iii-2" name="ques-2iii" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-2iii-1" name="ques-2iii" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 2-iv -->
          <h4>iv. Pace on which contents were covered</h4>
          <label>
            <input type="radio" id="ques-2iv-5" name="ques-2iv" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-2iv-4" name="ques-2iv" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-2iv-3" name="ques-2iv" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-2iv-2" name="ques-2iv" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-2iv-1" name="ques-2iv" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 2-v -->
          <h4>v. Overall effectiveness</h4>
          <label>
            <input type="radio" id="ques-2v-5" name="ques-2v" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-2v-4" name="ques-2v" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-2v-3" name="ques-2v" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-2v-2" name="ques-2v" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-2v-1" name="ques-2v" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 3 -->
          <h4>3) How do you rate the contents of the curricular?</h4>
          <label>
            <input type="radio" id="ques3-5" name="ques3" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques3-4" name="ques3" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques3-3" name="ques3" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques3-2" name="ques3" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques3-1" name="ques3" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 4 -->
          <h4>4) How do you rate lab experiments, if applicable?</h4>
          <label>
            <input type="radio" id="ques4-5" name="ques4" value="5" />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques4-4" name="ques4" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques4-3" name="ques4" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques4-2" name="ques4" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques4-1" name="ques4" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 5 -->
          <h4>5) Any Remarks</h4>
          <textarea name="remarks" rows="5"></textarea>
          <br /><br />
        </div>

        <div class="submit-form">
          <input type="submit" name="submit" value="Submit" id="submit" />
        </div>
      </form>
      <br />
    </div>
  </body>
</html>