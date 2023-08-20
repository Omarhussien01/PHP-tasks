function getUsers()
{
    $file_name = "../Models/users.csv";
    $users = [];

    if (($myFile = fopen($file_name, "r")) !== false) {
        while (($data = fgetcsv($myFile)) !== false) {
            $user = [
                'userNo' => $data[0],
                'image' => $data[1],
                'name' => $data[2],
                'email' => $data[3]
            ];
            $users[] = $user;
        }
        fclose($myFile);
    } else {
        die("Unable to open file");
    }

    return $users;
}