<?php

$members = [

    [
        "name" => "Lucky Martizano",
        "age" => 21,
        "height" => "176 cm",
        "weight" => "65 kg",
        "course" => "BS Information Technology",
        "nickname" => "Lucky",
        "hobbies" => "Basketball, Online Games, Motorcycling",
        "role" => "Web Developer",
        "image" => "lucky.jpg",
        "about" => "Hello! My name is Lucky Martizano. I am a BS Information Technology student. I enjoy basketball, online games, and motorcycling. I am interested in web development, programming, and learning new technologies related to Information Technology."
    ],

    [
        "name" => "Billy Naire Nombre",
        "age" => 20,
        "height" => "175.83 cm",
        "weight" => "60 kg",
        "course" => "BS Information Technology",
        "nickname" => "Billy",
        "hobbies" => "Basketball, Mobile Games",
        "role" => "Backend Developer",
        "image" => "billy.jpg",
        "about" => "Hello! My name is Billy Naire Nombre. I am a BS Information Technology student. I enjoy basketball and mobile games. I am interested in backend development, programming, and learning new technologies related to Information Technology."
    ],

    [
        "name" => "Daniela Jane Meñoza",
        "age" => 19,
        "height" => "165 cm",
        "weight" => "51 kg",
        "course" => "BS Information Technology",
        "nickname" => "Dani",
        "hobbies" => "Volleyball, Singing, Dancing",
        "role" => "Data Analyst",
        "image" => "Daniela.jpg",
        "about" => "Hello! My name is Daniela Jane Meñoza. I am a BS Information Technology student. I enjoy volleyball, singing, and dancing. I am interested in data analysis, programming, and learning new technologies related to Information Technology."
    ],

    [
        "name" => "Harlie Mejia",
        "age" => 19,
        "height" => "167 cm",
        "weight" => "67 kg",
        "course" => "BS Information Technology",
        "nickname" => "Harlie",
        "hobbies" => "Baseball, Playing Mobile Games",
        "role" => "Web Designer",
        "image" => "Harlie.jpg",
        "about" => "Hello! My name is Harlie Mejia. I am a BS Information Technology student. I enjoy baseball and playing mobile games. I am interested in web design, programming, and learning new technologies related to Information Technology."
    ],

    [
        "name" => "Xyck Balucos",
        "age" => 22,
        "height" => "167 cm",
        "weight" => "67 kg",
        "course" => "BS Information Technology",
        "nickname" => "Xyck",
        "hobbies" => "Basketball, Cycling",
        "role" => "Backend Developer",
        "image" => "xyck.jpg",
        "about" => "Hello! My name is Xyck Balucos. I am a BS Information Technology student. I enjoy basketball and cycling. I am interested in backend development, programming, and learning new technologies related to Information Technology."
    ],

    [
        "name" => "David Rainniel Dizon",
        "age" => 22,
        "height" => "167 cm",
        "weight" => "167 kg",
        "course" => "BS Information Technology",
        "nickname" => "Rain",
        "hobbies" => "Gaming, Motorcycling, MMA",
        "role" => "Team Leader / Programmer",
        "image" => "rain.jpg",
        "about" => "Hello! My name is David Rainniel Dizon. I am a BS Information Technology student. I enjoy gaming, motorcycling, and MMA. I am also interested in learning new technologies, improving my programming skills, and exploring different things related to Information Technology."
    ],

    [
        "name" => "Suhayla B. Langco",
        "age" => 22,
        "height" => "167 cm",
        "weight" => "75 kg",
        "course" => "BS Information Technology",
        "nickname" => "Suhay",
        "hobbies" => "Motorcycling, Swimming",
        "role" => "Web Designer",
        "image" => "Suhayla.jpg",
        "about" => "Hi! My name is Suhaylah, but you can call me Suhay, which is my nickname. I am 22 years old, and I am proud to be part of a big and loving family. We are seven siblings, and I am the middle child. In my free time, I enjoy traveling, motorcycling, and swimming. One of my biggest goals in life is to become a police officer. I have always admired people who dedicate themselves to protecting and serving their communities."
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Group Personal Profiles</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f3e8ff;
    min-height:100vh;
}

/* HEADER */

header{
    background:linear-gradient(135deg,#8e44ad,#c05ce3);
    color:white;
    text-align:center;
    padding:35px 20px;
}

header h1{
    font-size:40px;
    letter-spacing:2px;
}

header p{
    margin-top:8px;
    font-size:18px;
}

/* MAIN CONTAINER */

.container{
    width:90%;
    max-width:1000px;
    margin:40px auto;
}

/* PROFILE CARD */

.profile{
    background:white;
    border-radius:20px;
    padding:35px;
    margin-bottom:30px;

    box-shadow:0 8px 25px rgba(0,0,0,.15);

    display:flex;
    gap:40px;
    align-items:center;

    transition:0.3s;
}

.profile:hover{
    transform:translateY(-5px);
    box-shadow:0 12px 30px rgba(0,0,0,.20);
}

/* IMAGE */

.profile img{
    width:220px;
    height:220px;
    border-radius:20px;
    object-fit:cover;
    border:6px solid #a855d4;
}

/* DETAILS */

.details{
    flex:1;
}

.details h2{
    color:#8e44ad;
    font-size:30px;
    margin-bottom:5px;
}

.details h4{
    color:#777;
    margin-bottom:25px;
    font-size:18px;
}

/* INFORMATION */

.info{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
}

.info-box{
    background:#f7effc;
    padding:15px;
    border-radius:10px;
    border-left:5px solid #a855d4;
}

.info-box strong{
    color:#8e44ad;
    display:block;
    margin-bottom:5px;
}

/* ABOUT */

.about{
    background:#faf5ff;
    margin-top:25px;
    padding:25px;
    border-radius:15px;
}

.about h3{
    color:#8e44ad;
    margin-bottom:10px;
}

.about p{
    color:#555;
    line-height:1.7;
}

/* FOOTER */

footer{
    background:#8e44ad;
    color:white;
    text-align:center;
    padding:18px;
    margin-top:40px;
}

/* MOBILE */

@media(max-width:700px){

    .profile{
        flex-direction:column;
        text-align:center;
    }

    .info{
        grid-template-columns:1fr;
    }

    header h1{
        font-size:30px;
    }

    .profile img{
        width:180px;
        height:180px;
    }

}

</style>

</head>

<body>

<header>

    <h1>PERSONAL PROFILE</h1>

    <p>Our Group Personal Information</p>

</header>


<div class="container">

<?php foreach($members as $member): ?>

    <div class="profile">

        <img src="<?php echo $member['image']; ?>"
             alt="<?php echo $member['name']; ?>">

        <div class="details">

            <h2>
                <?php echo $member['name']; ?>
            </h2>

            <h4>
                <?php echo $member['role']; ?>
            </h4>

            <div class="info">

                <div class="info-box">
                    <strong>Age</strong>
                    <?php echo $member['age']; ?> years old
                </div>

                <div class="info-box">
                    <strong>Height</strong>
                    <?php echo $member['height']; ?>
                </div>

                <div class="info-box">
                    <strong>Weight</strong>
                    <?php echo $member['weight']; ?>
                </div>

                <div class="info-box">
                    <strong>Nickname</strong>
                    <?php echo $member['nickname']; ?>
                </div>

                <div class="info-box">
                    <strong>Course</strong>
                    <?php echo $member['course']; ?>
                </div>

                <div class="info-box">
                    <strong>Hobbies</strong>
                    <?php echo $member['hobbies']; ?>
                </div>

            </div>

        </div>

    </div>


    <div class="about">

        <h3>About <?php echo $member['nickname']; ?></h3>

        <p>
            <?php echo $member['about']; ?>
        </p>

    </div>

<?php endforeach; ?>

</div>


<footer>

    <p>
        &copy; 2026 Group Personal Profile
    </p>

</footer>

</body>

</html>
