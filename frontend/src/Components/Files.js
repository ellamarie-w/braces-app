import React, {useState} from 'react';
import Tooltip from '@mui/material/Tooltip';
import IconButton from '@mui/material/IconButton';
import Button from '@mui/material/Button';
import UploadFileIcon from '@mui/icons-material/UploadFile';
import FileDownloadIcon from '@mui/icons-material/FileDownload';
import axios from 'axios';

const initialValues = {
    file: null,
    fileName: '',
    fileURL: ''    
}

export default function Files() {

    const [file, setFile] = useState(initialValues);

    const fileSelectHandler = (e) => {
        setFile({
            file: e.target.files[0],
            fileName: e.target.files[0].name
        })
    }

    const onSubmit = (e) => {
        e.preventDefault();
        const fd = new FormData();
        fd.append('file', file.file, file.fileName);
        axios.post('http://localhost:8000/api/upload', fd, {
            onUploadProgress: progressEvent => {
                console.log('Upload progress: ' + Math.round(progressEvent.loaded / progressEvent.total * 100) + '%');
            }
        });
    }

    const download = () => {
        axios ({
            url: 'http://localhost:8000/api/download',
            method: 'GET',
            responseType: 'blob'
        }).then((response) => {
            const url = window.URL.createObjectURL(new Blob([response.data]));
            const link = document.createElement('a');
            link.href = url;
            link.setAttribute('download', 'bracesAppFile');
            document.body.appendChild(link);
            link.click();
        });
    }

  return (
    <div>
        <input id='file-input' type='file' onChange={fileSelectHandler} />

        <label htmlFor='file-input'>
            <Tooltip title='Add File'>
                <IconButton component='span'>
                    <UploadFileIcon />
                </IconButton>
            </Tooltip>
        </label>

        <Button variant='contained' onClick={ onSubmit }>
            Accept
        </Button>

        <IconButton onClick={ download }>
            <FileDownloadIcon />
        </IconButton>
    </div>
  )
}
