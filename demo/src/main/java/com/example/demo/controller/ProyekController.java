package com.example.demo.controller;

import com.example.demo.model.Proyek;
import com.example.demo.service.ProyekService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/proyek")
public class ProyekController {
    @Autowired
    private ProyekService proyekService;

    @PostMapping
    public ResponseEntity<Proyek> createProyek(@RequestBody Proyek proyek) {
        return ResponseEntity.ok(proyekService.saveProyek(proyek));
    }

    @GetMapping
    public ResponseEntity<List<Proyek>> getAllProyek() {
        return ResponseEntity.ok(proyekService.getAllProyek());
    }

    @PutMapping("/{id}")
    public ResponseEntity<Proyek> updateProyek(@PathVariable Long id, @RequestBody Proyek proyek) {
        proyek.setId(id);
        return ResponseEntity.ok(proyekService.updateProyek(proyek));
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyek(@PathVariable Long id) {
        proyekService.deleteProyek(id);
        return ResponseEntity.noContent().build();
    }

    @GetMapping("/{id}")
    public ResponseEntity<Proyek> getProyekById(@PathVariable Long id) {
        Proyek proyek = proyekService.getProyekById(id);
        if (proyek == null) {
            return ResponseEntity.notFound().build();
        }
        return ResponseEntity.ok(proyek);
    }

}
