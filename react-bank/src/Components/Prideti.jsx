import { useEffect, useState } from "react";

function Prideti({ setModalData, modalData, setEditData }) {

    const [vardas, setVardas] = useState('');
    const [pavarde, setPavarde] = useState('');
    const [asmensKodas, setAsmensKodas] = useState('');
    const [iban, setIban] = useState('');
    const [pinigai, setPinigai] = useState('');
    const [cash, setCash] = useState(0);

    useEffect(() => {
        if(null === modalData){
            return;
        }
        setVardas(modalData.vardas);
        setPavarde(modalData.pavarde);
        setAsmensKodas(modalData.asmensKodas);
        setIban(modalData.iban);
        setPinigai(modalData.pinigai);
    }, [modalData]);

    
    const save = () => {
        setEditData({
            vardas,
            pavarde,
            asmensKodas,
            iban,
            pinigai: (parseInt(modalData.pinigai) + parseInt(cash)),
            id:modalData.id
        });
        setCash('');
        setModalData(null);
        
    }
    if (modalData === null) {
        return null;
    }




    return (

        <>
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal">
                    <div className="modal-dialog">
                        <div className="modal-content">
                            <div className="modal-header">
                                <h5 className="modal-title">Prideti</h5>
                                <button onClick={() => setModalData(null)} type="button" className="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div className="modal-body">
                                <div><ul>
                                    <li>
                                        <span className="span-title">Vardas:</span> {modalData.vardas}
                                    </li>
                                    <li>
                                        <span className="span-title">Pavarde:</span> {modalData.pavarde}
                                    </li>
                                    <li>
                                        <span className="span-title">Asmens Kodas:</span> {modalData.asmensKodas}
                                    </li>
                                    <li>
                                        <span className="span-title">Iban:</span> {modalData.iban}
                                    </li>
                                    <li>
                                        <span className="span-title">Saskaitos Likutis:</span> {modalData.pinigai}
                                    </li>
                                <input className="form-control" value={cash} onChange={(e) => setCash(e.target.value)} type="text" placeholder="Iveskite norima suma" />
                                </ul>
                                </div>
                            </div>
                            <div className="modal-footer">
                                <button onClick={save} type="button" className="btn btn-primary">Prideti</button>
                                <button onClick={() => setModalData(null)} type="button" className="btn btn-secondary">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>

    );

}

export default Prideti;