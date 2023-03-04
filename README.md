# Login-and-Register-system-using-OOP

Login and Register system created using OOP PHP. An object oriented authentication system gives a user the ability to register，log in, logout and includes features like validation, session saving, salt-hash-encrypted passwords, error handlers.


### Tech Stack <a name="tech-stack"></a>

- PHP
- MySql
- Css

### Key Features <a name="key-features"></a>

#### Homepage with
- **[Login]**
- **[Logout]**
- **[Signup]**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LIVE DEMO -->

## 🚀 Live Demo 
![php login](https://user-images.githubusercontent.com/106079814/221407466-30dd6fc7-de31-4b1f-837f-23a102c354bc.jpg)



<!-- GETTING STARTED -->

## 💻 Getting Started <a name="getting-started"></a>

### Prerequisites

In order to run this project you need:

- Basic OOP PHP
- PHP form validation
- PHP error handling
- MySql
- Xampp


### Setup

Clone this repository to your desired folder:

- https://github.com/NATASHA-ct/LOGIN-SYSTEM-PHP-OOP.git

 - You can download this OOP login and Register system as a ZIP and enter your database details in the dbh.classes.php file.
 
```
 protected function connect(){
        // error handling
        try {
            $username = "USERNAME GOES HERE";
            $password = "PASSWORD GOES HERE";
            $dbh = new PDO('mysql:host=HOST NAME GOES HERE;dbname=DATABASE NAME GOES HERE', $username, $password);
            return $dbh;
        } catch (PDOExceotion $e) {
            print "Error! ". $e->getMessage()."<br/>";
            die();
        }
  
```

## 👥 Author
👤 **NATASHA TATENDA CHIROMBE**

- GitHub: [@NATASHA-ct]((https://github.com/NATASHA-ct)
- Twitter: [@NatashaChirombe]
- LinkedIn: [Natasha Chirombe](linkedin.com/in/natasha-chirombe-1531aa17b)

<!-- ACKNOWLEDGEMENTS -->

## 🙏 Acknowledgments <a name="acknowledgements">
Dani Krossing(Tutor)
</a>

<!-- LICENSE -->

## 📝 License <a name="license"></a>

This project is [MIT](./LICENSE) licensed.

_NOTE: we recommend using the [MIT license](https://choosealicense.com/licenses/mit/) - you can set it up quickly by [using templates available on GitHub](https://docs.github.com/en/communities/setting-up-your-project-for-healthy-contributions/adding-a-license-to-a-repository). You can also use [any other license](https://choosealicense.com/licenses/) if you wish._

<p align="right">(<a href="#readme-top">back to top</a>)</p>
