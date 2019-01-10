<form action = "process_update_user.php" method = "POST">
    <table class="user_table" align=center>
    <tbody>
        <tr>
			<td><label>Prénom : </label></td> 
            <td><input type="text" name="fname" value="<?=$user['prenom'];?>"></td>
		</tr>
        <tr>
            <td><label>Nom: </label></td>
            <td><input type="text" name="lname" value="<?=$user['nom'];?>"></td> 
        </tr>
        <tr>
            <td><label>Email_Adress: </label></td>
            <td><input type="text" name="email" value="<?=$user['email'];?>"></td>
        </tr>
        <tr>
            <td><label>Telephone: </label></td> 
            <td><input type="text" name="telephone" value="<?=$user['telephone'];?>"></td>
        </tr>
        <tr>
            <td><label>Date de naissance: </label></td>
            <td><input type="date" name="dob" value="<?=$user['date_naissance'];?>"></td>
        </tr>
        <tr>
            <td><label>Sexe: </label> </td>
            <td> <input type="text" name="gender" value="<?=$user['sexe'];?>"> </td>   
        </tr>
        <tr>
            <td><label>Pays: </label> </td> 
            <td><input type="text" name="country" value="<?=$user['pays'];?>"></td>
        </tr>
        <tr>
            <td><label>Mot de Passe: </label> </td> 
            <td><input type="password" name="password" value="<?=$user['password'];?>"></td>
        </tr>
        <tr>
            <td> </td> 
            <td><input type="submit" value="Mise ajour"></td>
        </tr>

    </tbody>    
    </table>
</form>