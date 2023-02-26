# Login-and-Register-system-using-OOP

Login and Register system created using OOP PHP



    ## 🛠 Built With <a name="built-with"></a>

### Tech Stack <a name="tech-stack"></a>

- PHP
- MySql
- Css


<!-- Features -->

### Key Features <a name="key-features"></a>

#### Homepage with
- **[Login]**
- **[Logout]**
- **[Signup]**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LIVE DEMO -->

## 🚀 Live Demo <a name="live-demo"></a>

> Add a link to your deployed project.

- [Live Demo Link](https://yourdeployedapplicationlink.com)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

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

- 

`You can download this OOP login and Register system as a ZIP and enter your database details in the dbh.classes.php file.

`protected function connect(){
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

    }`



### Deployment


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- AUTHORS -->

## 👥 Authors <a name="authors"></a>

👤 **NATASHA TATENDA CHIROMBE**

- GitHub: [@NATASHA-ct]((https://github.com/NATASHA-ct)
- Twitter: [@NatashaChirombe]
- LinkedIn: [Natasha Chirombe](linkedin.com/in/natasha-chirombe-1531aa17b)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- FUTURE FEATURES -->

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- ACKNOWLEDGEMENTS -->

## 🙏 Acknowledgments <a name="acknowledgements">
Dani Krossing(Tutor)
</a>


<!-- LICENSE -->

## 📝 License <a name="license"></a>

This project is [MIT](./LICENSE) licensed.

_NOTE: we recommend using the [MIT license](https://choosealicense.com/licenses/mit/) - you can set it up quickly by [using templates available on GitHub](https://docs.github.com/en/communities/setting-up-your-project-for-healthy-contributions/adding-a-license-to-a-repository). You can also use [any other license](https://choosealicense.com/licenses/) if you wish._

<p align="right">(<a href="#readme-top">back to top</a>)</p>
