<?php
/**
* Author: Marcelo R. Soares
*        ramos3d.com
*/
class Importer
{
    public function sqlGen ($jsonArray, $fields, $table) {
        $file = "$table.txt";
        $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
        print "\n    Generating the SQL ISERTS to the $table table... \n";
        foreach ($jsonArray as $key => $value) {
            $fieldvalue = array_values($value);
            foreach ($fieldvalue as $fkey => $fval) {
                if (!is_numeric($fval)) {
                    $fieldvalue[$fkey] = "\"$fval\"";
                }
            }
            $fieldvalue = implode(",", $fieldvalue);
            $insertLine = "INSERT INTO " . $table . " ($fields)" . " VALUES ". "($fieldvalue)" . "\n";

            fwrite($handle, $insertLine);
        }
        print " \n ------------------------------------------------------------------------------ \n";
        print "  The exporting has been completed successfully: ($table.txt) is now available";
        print " \n ------------------------------------------------------------------------------ \n";
        return true;
    }
}
