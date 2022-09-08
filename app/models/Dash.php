<?php  

Class Dash Extends Controller {
    private $db;
    public $dataInfo;
    public $datainfo;


    function __construct () { 
        $this->db = new Database;
    }

    public function serviciosContratados($username){

        $query="SELECT 
                e.contratoid 'Contrato',
                s.tiposerv 'Servicio',
                e.valorservicio 'Valor'
            FROM usuarios u
            INNER JOIN personas p ON p.personaid  = u.personaid 
            INNER JOIN emprecontract e ON p.empresaid = e.empresaid 
            INNER JOIN servicios s ON e.servid = s.servid 
            WHERE u.username = $username";

        $this->db->query($query);
        $this->dataInfo = $this->db->resultSet();
        $this->dataInfo = json_decode(json_encode($this->dataInfo), true);
        return $this->dataInfo;
    }

    public function ultimasFacturas($username){

        $query="SELECT 
                f.facturaid 'Factura',
                f.fechafact 'Fecha',
                f.valorfact 'Valor',
                WHEN f.pagoestado = 0 THEN 'Pendiente' ELSE 'Pagado' END 'EstadoPago' 
            FROM usuarios u
            INNER JOIN personas p ON p.personaid  = u.personaid 
            INNER JOIN emprecontract e ON p.empresaid = e.empresaid 
            INNER JOIN factura f ON p.empresaid = f.empresaid 
            WHERE u.username = $username
            GROUP BY f.facturaid 
            ORDER BY f.fechafact DESC 
            LIMIT 5";

        $this->db->query($query);
        $this->dataInfo = $this->db->resultSet();
        $this->dataInfo = json_decode(json_encode($this->dataInfo), true);
        return $this->dataInfo;
    }

    public function pendientesPago($username){
        $query="SELECT 
                f.facturaid 'Factura',
                f.fechafact 'Fecha',
                f.valorfact 'Valor',
                CASE WHEN f.pagoestado = 0 THEN 'Pendiente' ELSE 'Pagado' END 'EstadoPago' 
            FROM usuarios u
            INNER JOIN personas p ON p.personaid  = u.personaid 
            INNER JOIN emprecontract e ON p.empresaid = e.empresaid
            INNER JOIN factura f ON p.empresaid = f.empresaid 
            WHERE u.username = $username
            AND f.pagoestado = 0 
            GROUP BY f.facturaid 
            ORDER BY f.fechafact DESC";
            
        $this->db->query($query);
        $this->dataInfo = $this->db->resultSet();
        $this->dataInfo = json_decode(json_encode($this->dataInfo), true);
        return $this->dataInfo;
    }

    function __destructu () {
        $this->db = null;
    }

}