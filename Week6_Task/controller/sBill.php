<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/db.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/classes/response.php";

class SBill
{
    public function insertNewSBill($userId, $totalEarnings, $totalDeductions)
    {
        $query = "  INSERT 
                    INTO supplementary_bills (user_id, total_earnings, total_deductions) 
                    VALUES (?, ?, ?)
                    RETURNING id";
        $queryResponse = (new DBConnection())->insertSingle($query, [$userId, $totalEarnings, $totalDeductions]);
        return $queryResponse;
    }

    public function insertSBillEmpMap($sBillId, $billId, $empId, $totalEarnings, $totalDeductions, $month, $year){
        $query = "INSERT INTO s_bill_emp_map (s_bill_id, bill_id, emp_id, total_earnings, total_deductions, month, year)
            VALUES (?, ?, ?, ?, ?, ?, ?) RETURNING id;
        ";
        $queryResponse = (new DBConnection())->insertSingle($query, [$sBillId, $billId, $empId, $totalEarnings, $totalDeductions, $month, $year]);
        return $queryResponse;
    }

    function insertSingleBillAddings($sBillId, $sBillEmpMapId, $addingType, $amount){
            $query = "INSERT INTO bill_addings (s_bill_id, s_bill_emp_map_id, adding_type_id, amount)
            VALUES (?, ?, ?, ?)";
            $queryResponse = (new DBConnection())->insertSingle($query, [
                $sBillId,
                $sBillEmpMapId,
                $addingType,
                $amount
            ]);
            return $queryResponse;
    }
}
