package com.example.demo.controller;

import com.example.demo.model.Lokasi;
import com.example.demo.service.LokasiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/lokasi")
public class LokasiController {
    @Autowired
    private LokasiService lokasiService;

    @PostMapping
    public ResponseEntity<Lokasi> createLokasi(@RequestBody Lokasi lokasi) {
        return ResponseEntity.ok(lokasiService.saveLokasi(lokasi));
    }

    @GetMapping
    public ResponseEntity<List<Lokasi>> getAllLokasi() {
        return ResponseEntity.ok(lokasiService.getAllLokasi());
    }

    @PutMapping("/{id}")
    public ResponseEntity<Lokasi> updateLokasi(@PathVariable Long id, @RequestBody Lokasi lokasi) {
        lokasi.setId(id);
        return ResponseEntity.ok(lokasiService.updateLokasi(lokasi));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteLokasi(@PathVariable Long id) {
        lokasiService.deleteLokasi(id);
        return ResponseEntity.noContent().build();
    }

    @GetMapping("/{id}")
    public ResponseEntity<Lokasi> getLokasiById(@PathVariable Long id) {
        Lokasi lokasi = lokasiService.getLokasiById(id);
        if (lokasi == null) {
            return ResponseEntity.notFound().build();
        }
        return ResponseEntity.ok(lokasi);
    }
}
