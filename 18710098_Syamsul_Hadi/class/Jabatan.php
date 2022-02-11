<?php
class Jabatan
{
    private $_db = null;
    private $_formitem = [];
    public function __construct()
    {
        $this->_db = DB::getInstance();
    }
    public function validasi($formMethod)
    {
        $validate = new Validate($formMethod);
        $this->_formitem['nama_jabatan'] = $validate->setRules('nama_jabatan', 'Nama Jabatan', [
            'sanitize' => 'string',
            'required' => true,
        ]);
        $this->_formitem['gapok_jabatan'] = $validate->setRules('gapok_jabatan', 'Gapok', [
            'sanitize' => 'int',
            'numeric' => true,
            'min_value' => 0,
        ]);
        $this->_formitem['tunjangan_jabatan'] = $validate->setRules('tunjangan_jabatan', 'Tunjangan Jabatan', [
            'sanitize' => 'int',
            'numeric' => true,
        ]);
        $this->_formitem['uang_makan_perhari'] = $validate->setRules('uang_makan_perhari', 'Uang Makan', [
            'sanitize' => 'int',
            'numeric' => true,
        ]);
        if (!$validate->passed()) {
            return $validate->getError();
        }
    }
    public function insert()
    {
        return $this->_db->insert('jabatan', [
            'nama_jabatan' => $this->getItem('nama_jabatan'),
            'gapok_jabatan' => $this->getItem('gapok_jabatan'),
            'tunjangan_jabatan' => $this->getItem('tunjangan_jabatan'),
            'uang_makan_perhari' => $this->getItem('uang_makan_perhari'),
        ]);
    }

    public function getItem($item)
    {
        return isset($this->_formitem[$item]) ? $this->_formitem[$item] : '';
    }

    public function errorMessage($pesanError, $item)
    {
        if (isset($pesanError[$item])) {
            echo "<span class=\"text-danger\" role=\"alert\">$pesanError[$item]<span>";
        } else {
            echo "";
        }
    }
    public function delete($id)
    {
        $this->_db->delete('jabatan', ['id', '=', $id]);
    }

    public function generate($id_jabatan)
    {
        $result = $this->_db->getWhereOnce('jabatan', ['id', '=', $id_jabatan]);
        foreach ($result as $key => $value) {
            $this->_formitem[$key] = $value;
        }
    }
}
