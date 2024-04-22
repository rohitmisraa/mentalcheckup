
// var questions = ["I find it difficult finishing a task or project", "If a task or project requires a lot of thought I will often delay in getting it started", 
// "I find it difficult to sit still and often fidget or squirm"]
var desc = ["This feelings have symptoms", "Please describe your personality"];
var mental = ["Depression","Schizophrenia", "Bipolar disorder", "Obsessive compulsive disorder ( OCD)", "Panic disorder", "Post traumatic stress (PTSD)", "Borderline personality disorder]"];
// var mental = ["Schizophrenia", "Panic Disorder", "Obbesive Compulsive Disorder"];

var qnblock = document.getElementById("qnblock");
var step = 1;
var score = 0;
// qnblock.style.display = "none";                                                                   
// qnblock.style.backgroundColor = "red";
// questions.forEach(function question(value, index) {
//     qnblock.innerHTML =
//     `<h1 class="text-xl font-medium title-font mb-4 text-gray-900">${value}</h1>`
                                      
// });
changeQN(0);
function changeQN(index) {
    qnblock.innerHTML =
    `<h1 class="text-xl sm:text-3xl title-font mb-4 text-gray-900 font-bold px-20 my-10">${questions[index]}</h1>`
}

var st1block = document.getElementById("st1-block");
var st1data = "";
mental.forEach(function mental(value, index) {
    st1data = st1data + `<div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
    <input id="mental${index}" type="checkbox" value="100" name="bordered-mental" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="mental${index}" class="w-full py-4 ml-2 text-sm font-medium text-gray-900">${value}</label>
    </div>
    `;

});
// console.log(st1data);
st1block.innerHTML = st1data;

const step1 = document.getElementById("step1");
const step2 = document.getElementById("step2");
changetab();
function changetab(params) {
    
    if (step == 1) {
        step1.style.display = "none";
        // step2.style.display = "none";
        step2.style.display = "block";
    }else if (step == 2) {
        step1.style.display = "none";
        step2.style.display = "block"; 
    }
}

var st1bar = document.getElementById("stepbar");
var stpbardata = "";
questions.forEach(function question(value, index) {
    if (index == 0) {
        stpbardata = stpbardata +  `
        <div id="st${(index + 1)}" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 text-gray-500 tracking-wider rounded-t">
            ${(index + 1)}
        </div>`
        
    }else{
        stpbardata = stpbardata +  `
        <div id="st${(index + 1)}" class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 text-gray-500 tracking-wider rounded-t">
            ${(index + 1)}
        </div>`

    }
});

st1bar.innerHTML = stpbardata;




changestep();
function changestep() {
    if (step <= questions.length) {
        const steps = document.getElementById("st"+step);
        steps.style.color = "green";
        steps.style.backgroundColor = "#f0f0f0";
        if (step != 0) {
            const prev_step = document.getElementById("st"+(step-1));
            prev_step.style.color = "green";
            prev_step.style.backgroundColor = "#d5d5d5";
            
        }
    }
}

function next(val) {
    if (step < questions.length) {
        score = score + val;
        step++;
    }else {
        score = score + val;
        console.log("Finished");
        const message = document.getElementById('result-message');
        const progress_perc = document.getElementById('progress_perc');
        const result = document.getElementById('result');
        const resultSuggest = document.getElementById('result-suggest');
        document.getElementById('qnlist').style.display = "none";
        step1.style.display = "none";
        step2.style.display = "none"; 
        result.style.display = "block";
        $("#test_container").hide();
        var totalScore = questions.length * 8;
        if (score < 40) {
            // alert("You are sad And everything will be fine!");
            message.innerText = "Little to Moderate disorder : "+ "("+ score+"/"+ totalScore +")";
            progress_perc.innerText = Math.round((score/totalScore)*100,0);
            progress_bar.style.width = ((score/totalScore)*100)+"%";
            // progress_perc.innerText = "Your Score: " + "("+ score+"/"+ totalScore +")";
            
        }if (score < 65) {
            // alert("You are depressed and you should seek for proffessional guidance");
            message.innerText = "Moderate to severe disorder: "+ "("+ score+"/"+ totalScore +")";
            progress_perc.innerText = Math.round((score/totalScore)*100,0);
            progress_bar.style.width = ((score/totalScore)*100)+"%";
        }else{
            message.innerText = "Severe disorder: "+ "("+ score+"/"+ totalScore +")";
            progress_perc.innerText = Math.round((score/totalScore)*100,0);
            progress_bar.style.width = ((score/totalScore)*100)+"%";
            resultSuggest.innerHTML = "You should consult to specialist Soon as Possible";
        }
        // alert("You are depersed by Score: "+ score);
        
    }
    changetab();
    changestep();
    changeQN(step-1);
}