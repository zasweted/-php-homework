import { useState } from "react";

function Edit({ setModalData, modalData, setEditData }) {

    const [vardas, setVardas] = useState('');
    const [pavarde, setPavarde] = useState('');
    const [asmensKodas, setAsmensKodas] = useState('');
    const [iban, setIban] = useState('');
    const [pinigai, setPinigai] = useState('');

    return (

        <>
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal">
                    <div className="modal-dialog">
                        <div className="modal-content">
                            <div className="modal-header">
                                <h5 className="modal-title">User Edit</h5>
                                <button type="button" className="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div className="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div className="modal-footer">
                                <button type="button" className="btn btn-primary">Save changes</button>
                                <button type="button" className="btn btn-secondary">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>

    );

}

export default Edit;