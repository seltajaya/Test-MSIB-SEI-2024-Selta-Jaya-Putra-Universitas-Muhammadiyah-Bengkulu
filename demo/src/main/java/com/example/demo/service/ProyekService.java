package com.example.demo.service;

import com.example.demo.model.Proyek;
import com.example.demo.repository.ProyekRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class ProyekService {
    @Autowired
    private ProyekRepository proyekRepository;

    public Proyek saveProyek(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public List<Proyek> getAllProyek() {
        return proyekRepository.findAll();
    }

    public Proyek updateProyek(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public void deleteProyek(Long id) {
        proyekRepository.deleteById(id);
    }

    public Proyek getProyekById(Long id) {
        Optional<Proyek> result = proyekRepository.findById(id);
        return result.orElse(null);
    }
}
