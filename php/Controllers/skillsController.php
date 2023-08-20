function getSkills()
{
    $file_name = "../Models/skills.csv";
    $skills = [];

    if (($myFile = fopen($file_name, "r")) !== false) {
        while (($data = fgetcsv($myFile)) !== false) {
            $skill = [
                'skillNo' => $data[0],
                'skillTitle' => $data[1],
                'skill1' => $data[2],
                'skill2' => $data[3],
                'skill3' => $data[4]
            ];
            $skills[] = $skill;
        }
        fclose($myFile);
    } else {
        die("Unable to open file");
    }

    return $skills;
}