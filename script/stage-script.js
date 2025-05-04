const prev = document.getElementById("prev");
const next = document.getElementById("next");
const stageParagraph = document.getElementById("stage");
const stage1 = document.getElementById("stage1");
const stage2 = document.getElementById("stage2");
const stage3 = document.getElementById("stage3");

const nextStage = (param1, param2, param3) => {
    if(
        !param1.classList.contains("non-active-input") && 
        param2.classList.contains("non-active-input") &&
        param3.classList.contains("non-active-input")
    ) {
        param1.classList.add("non-active-input");
        param2.classList.remove("non-active-input");
        stageParagraph.innerText = "Etape 2";
    } else if (
        param1.classList.contains("non-active-input") && 
        !param2.classList.contains("non-active-input") &&
        param3.classList.contains("non-active-input")
    ) {
        param2.classList.add("non-active-input");
        param3.classList.remove("non-active-input");
        stageParagraph.innerText = "Etape 3";
    } 
}

const prevStage = (param1, param2, param3) => {
    if(
        param1.classList.contains("non-active-input") && 
        !param2.classList.contains("non-active-input") &&
        param3.classList.contains("non-active-input")
    ) {
        param1.classList.remove("non-active-input");
        param2.classList.add("non-active-input");
        stageParagraph.innerText = "Etape 1";
    } else if (
        param1.classList.contains("non-active-input") && 
        param2.classList.contains("non-active-input") &&
        !param3.classList.contains("non-active-input")
    ) {
        param2.classList.remove("non-active-input");
        param3.classList.add("non-active-input");
        stageParagraph.innerText = "Etape 2";
    } 
}

next.addEventListener("click", () => nextStage(stage1, stage2, stage3));
prev.addEventListener("click", () => prevStage(stage1, stage2, stage3));


