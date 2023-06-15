var data = {
    country: [
        {
            Field10: "USA",
            state_s: ["California", "Texas", "Florida"],
        },
        {
            Field10: "Canada",
            state_s: ["Alberta", "BritishColumbia", "Manitoba"],
        }, {
            Field10: "Germany",
            state_s: ["Bavaria", "NorthRhine"],
        }, {
            Field10: "India",
            state_s: ["Maharashtra", "TamilNadu", "Karnataka", "Arunachal Pradesh", "Andhra Pradesh", "Delhi "],
        },

    ],
};

window.onload = function () {
    const selectcountry = document.getElementById("Field10");
    const selectstate = document.getElementById("state_s");
    selectstate.disabled = true;

    //Add country Value to country Select option
    data.country.forEach((value) => {
        selectcountry.appendChild(createOption(value.Field10, value.Field10));
    });

    selectcountry.addEventListener("change", function (e) {
        selectstate.disabled = false;
        data.country.forEach((detail, index) => {
            // console.log(data.country[index].state_s);
            if (detail.Field10 == e.target.value) {
                selectstate.innerHTML = "";
                selectstate.append(createOption("Select District", ""));
                data.country[index].state_s.forEach((state_s) => {
                    selectstate.append(createOption(state_s, state_s));
                });
            }
        });
    });

    //Create New Option Tag With Value
    function createOption(displayMember, valueMember) {
        const newOption = document.createElement("option");
        newOption.value = valueMember;
        newOption.text = displayMember;
        return newOption;
    }
};