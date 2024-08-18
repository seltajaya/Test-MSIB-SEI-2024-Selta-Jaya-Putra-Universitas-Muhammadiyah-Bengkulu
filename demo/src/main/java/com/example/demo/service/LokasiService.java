package com.example.demo.service;

import com.example.demo.model.Lokasi;
import com.example.demo.repository.LokasiRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class LokasiService {
    @Autowired
    private LokasiRepository lokasiRepository;

    public Lokasi saveLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public List<Lokasi> getAllLokasi() {
        return lokasiRepository.findAll();
    }

    public Lokasi updateLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public void deleteLokasi(Long id) {
        lokasiRepository.deleteById(id);
    }

    public Lokasi getLokasiById(Long id) {
        return lokasiRepository.findById(id).orElse(null);
    }
}
