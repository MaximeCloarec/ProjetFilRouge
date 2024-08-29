// Déclaration des variables globale
let foodList;
let currentWeek = "curr";
const prevWeekButton = document.getElementById("prevArrow");
const nextWeekButton = document.getElementById("nextArrow");

// //Fonction asynchrone pour récupérer la liste des plats depuis l'API
async function getFoodList() {
    // Envoi d'une requête HTTP GET à l'URL de l'API
    const response = await fetch(
        "http://localhost/GourmetBox/API/platsAPI.php",
        { method: "GET" }
    );
    console.log(response);
    // Extraction des données JSON de la réponse
    foodList = await response.json();

    // Appel de la fonction pour générer les fiches de plats
    generateFoodList(foodList);
    console.log(foodList);
    console.log(currentWeek);
}

getFoodList();
// Fonction pour générer les fiches de plats dans le HTML
function generateFoodList(foodList) {
    //Filtrage
    const filteredFoodList = foodList.filter(
        (plats) => plats.week_plats === currentWeek
    );
    // Sélection du conteneur HTML pour les fiches de plats
    const foodFichesContainer = document.querySelector(".foodCardContainer");
    // Vider le conteneur avant d'ajouter de nouvelles fiches
    while (foodFichesContainer.firstChild) {
        foodFichesContainer.removeChild(foodFichesContainer.firstChild);
    }
    // Vérification si la liste des plats existe et n'est pas vide
    if (filteredFoodList && filteredFoodList.length > 0) {
        // Boucle à travers chaque plat de la liste
        for (let i = 0; i < filteredFoodList.length; i++) {
            // Extraction des détails du plat
            const fiches = filteredFoodList[i];
            //Création Div Text
            const foodFichesBody = document.createElement("div");
            foodFichesBody.dataset.id = filteredFoodList[i].id_plats;
            foodFichesBody.classList = "foodFichesBody";
            // Création des balises
            // Balises Images
            const foodFichesImage = document.createElement("img");
            foodFichesImage.src = fiches.img_plats;
            foodFichesImage.classList = "foodFichesImage";
            //Balises Nom
            const foodFichesTitle = document.createElement("h5");
            foodFichesTitle.innerText = fiches.name_plats;
            foodFichesTitle.classList = "foodFichesTitle";
            //Balises Container Time/Type/Receipe
            const foodFicheTextInfoContainer = document.createElement("div");
            foodFicheTextInfoContainer.classList = "foodFicheTextInfoContainer";
            //Balises Time
            const foodFichesTime = document.createElement("p");
            foodFichesTime.innerText = `Préparation : ${fiches.time_plats} Minutes`;
            foodFichesTime.classList = "foodFichesTime";
            //Balises Type
            const foodFichesType = document.createElement("p");
            foodFichesType.innerText = `Idéal pour : ${fiches.type_plats}`;
            foodFichesType.classList = "foodFichesType";
            //Append Child
            foodFichesContainer.append(foodFichesBody);
            foodFichesBody.append(
                foodFichesImage,
                foodFichesTitle,
                foodFicheTextInfoContainer
            );
            foodFicheTextInfoContainer.append(foodFichesTime, foodFichesType);
        }
    } else {
        console.log("BDD est vide");
    }
}

// getFoodList();

// WeekDate
// Variable
const currentDate = new Date();
const dayOfWeek = currentDate.getDay();
const weekDates = document.getElementById("weekDates");
let dayToMonday;
let monday;
let sunday;

//Get Monday
function getDay() {
    if (dayOfWeek == 0) {
        dayToMonday = 1;
    } else {
        dayToMonday = dayOfWeek - 1;
    }

    if (currentWeek == "curr") {
        monday = new Date(currentDate);
        monday.setDate(currentDate.getDate() - dayToMonday);
    } else if (currentWeek == "next") {
        monday = new Date(currentDate);
        monday.setDate(currentDate.getDate() - dayToMonday + 7);
    } else {
        monday = new Date(currentDate);
        monday.setDate(currentDate.getDate() - dayToMonday - 7);
    }
    //GetSunday

    const daysToSunday = 7 - dayOfWeek;
    if (currentWeek == "curr") {
        sunday = new Date(currentDate);
        sunday.setDate(currentDate.getDate() + daysToSunday);
    } else if (currentWeek == "next") {
        sunday = new Date(currentDate);
        sunday.setDate(currentDate.getDate() + daysToSunday + 7);
    } else {
        sunday = new Date(currentDate);
        sunday.setDate(currentDate.getDate() + daysToSunday - 7);
    }

    //Convert Num day to Text Day
    function fDay(d) {
        let DayText;
        if (d == 0) {
            DayText = "Dimanche";
        } else if (d == 1) {
            DayText = "Lundi";
        } else if (d == 2) {
            DayText = "Mardi";
        } else if (d == 3) {
            DayText = "Mercredi";
        } else if (d == 4) {
            DayText = "Jeudi";
        } else if (d == 5) {
            DayText = "Vendredi";
        } else {
            DayText = "Samedi";
        }
        return DayText;
    }
    //Convert Num Month to Text Month
    function fMonth(m) {
        let MonthText;
        if (m == 0) {
            MonthText = "Janvier";
        } else if (m == 1) {
            MonthText = "Fevrier";
        } else if (m == 2) {
            MonthText = "Mars";
        } else if (m == 3) {
            MonthText = "Avril";
        } else if (m == 4) {
            MonthText = "Mai";
        } else if (m == 5) {
            MonthText = "Juin";
        } else if (m == 6) {
            MonthText = "Juillet";
        } else if (m == 7) {
            MonthText = "Aout";
        } else if (m == 8) {
            MonthText = "Septembre";
        } else if (m == 9) {
            {
            }
            MonthText = "Octobre";
        } else if (m == 10) {
            MonthText = "Novembre";
        } else {
            MonthText = "Decembre";
        }
        return MonthText;
    }

    weekDates.innerText = `${fDay(
        monday.getDay()
    )} ${monday.getDate()} ${fMonth(monday.getMonth())} au ${fDay(
        sunday.getDay()
    )} ${sunday.getDate()} ${fMonth(sunday.getMonth())}`;
}

getDay();

prevWeekButton.addEventListener("click", () => {
    if (currentWeek === "curr") {
        currentWeek = "prev";
        prevWeekButton.setAttribute("disabled", "");
    } else if (currentWeek === "next") {
        currentWeek = "curr";
        nextWeekButton.removeAttribute("disabled");
    }
    generateFoodList(foodList);
    getDay();
});

nextWeekButton.addEventListener("click", () => {
    if (currentWeek === "curr") {
        currentWeek = "next";
        nextWeekButton.setAttribute("disabled", "");
    } else if (currentWeek === "prev") {
        currentWeek = "curr";
        prevWeekButton.removeAttribute("disabled");
    }
    generateFoodList(foodList);
    getDay();
});
