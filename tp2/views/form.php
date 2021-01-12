<main>

<div class="container">
    
    <form method="POST">
        <div class="input-group mb-5 ">
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Civilité</span>
            <Select class="form-select bg-secondary text-light" name="gender" aria-label="Default select example" required>
                <option value="">civilité</option>
                <option <?= (!empty($gender) && $gender == 'Homme') ? 'selected': '' ?> value="Homme">Homme</option>
                <option <?= (!empty($gender) && $gender == 'Femme') ? 'selected': '' ?> value="Femme">Femme </option>
                <option <?= (!empty($gender) && $gender == 'GreyMan') ? 'selected': '' ?> value="GreyMan">GreyMan</option>
            </Select>
            <div><?= $errorList['gender'] ?? '' ?></div>

            
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Nom</span>
            <input 
                type="text" 
                class="form-control bg-secondary text-light p-3"  
                name="name"
                aria-label="Name" 
                aria-describedby="basic-addon1" 
                value="<?= $name ?? '' ?>" 
                title="Vous avez des chiffres dans votre nom vous ?"
                pattern="^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$" 
                required>
            <div><?= $errorList['name'] ?? '' ?></div>
            <span 
                class="input-group-text border-0 bg-dark text-light" 
                id="basic-addon1">Prenom</span>
            <input 
                type="text" 
                class="form-control bg-secondary text-light p-3" 
                name="firstname"
                aria-label="Firstname" 
                aria-describedby="basic-addon1" 
                value="<?= $firstname ?? '' ?>" 
                title="Vous avez des chiffres dans votre nom vous ?"
                pattern="^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$" 
                required
            >
            <div><?= $errorList['firstname'] ?? '' ?></div>
        </div>
        <div class="input-group mb-5 ">
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Age</span>
            <input type="number" min="1" max="140" step="1" class="form-control bg-secondary text-light p-3" pattern="[0-9]{1,3}" name="age"
                aria-label="Age" aria-describedby="basic-addon1" value="<?= $age ?? '' ?>" title="Vous avez des chiffres dans votre nom vous ?"
                >
                <div><?= $errorList['age'] ?? '' ?></div>
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Societe</span>
            <input 
            type="text" 
            name="company"
            class="form-control bg-secondary text-light p-3"   
            aria-label="company" 
            aria-describedby="basic-addon1" 
            value="<?= $company ?? '' ?>" 
            title="Vous avez des chiffres dans votre nom vous ?"
            pattern="^[a-zA-Z0-9 ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$" 
            required
            >
            <div><?= $errorList['company'] ?? '' ?></div>
        </div>
        <div class="input-group ">
            <div class="input-group mb-5 input-button">
                <input type="submit" class="form-control bg-danger text-light">
            </div>
        </div>

    </form>
</div>

</main>
