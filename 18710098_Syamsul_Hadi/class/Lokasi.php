<?php
class Lokasi
{
    private $_db = null;
    private $_formitem = [];
    public function __construct()
    {
        $this->_db = DB::getInstance();
    }
    public function validasi($formMethod, $boolean = false)
    {
        $value = $boolean ? ['lokasi', 'nama_lokasi'] : " ";
        $key = $boolean ? 'unique' : " ";
        $rules = [
            'required' => true,
            'sanitize' => 'string',
        ];
        $rules[$key] = $value;
        $validate = new Validate($formMethod);
        $this->_formitem['nama_lokasi'] = $validate->setRules('nama_lokasi', 'Nama Lokasi', $rules);
        if (!$validate->passed()) {
            return $validate->getError();
        }
    }
    public function getItem($item)
    {
        return isset($this->_formitem[$item]) ? $this->_formitem[$item] : '';
    }

    public function insert()
    {
        return $this->_db->insert('lokasi', [
            'nama_lokasi' => $this->getItem('nama_lokasi'),
        ]);
    }

    public function errorMessage($pesanError, $item)
    {
        if (isset($pesanError[$item])) {
            echo "<span class=\"text-danger\" role=\"alert\">$pesanError[$item]<span>";
        } else {
            echo "";
        }
    }
    public function update($id)
    {
        $newLokasi = [
            'nama_lokasi' => $this->getItem('nama_lokasi'),
        ];
        $this->_db->update('lokasi', $newLokasi, ['id', '=', $id]);
    }
    public function delete($id)
    {
        $this->_db->delete('lokasi', ['id', '=', $id]);
    }

    public function generate($id_lokasi)
    {
        $result = $this->_db->getWhereOnce('lokasi', ['id', '=', $id_lokasi]);
        foreach ($result as $key => $value) {
            $this->_formitem[$key] = $value;
        }
    }
};
