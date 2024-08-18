package com.example.demo.model;

import jakarta.persistence.*;

@Entity
public class ProyekLokasi {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @ManyToOne
    @JoinColumn(name = "proyek_id")
    private Proyek proyek;

    @ManyToOne
    @JoinColumn(name = "lokasi_id")
    private Lokasi lokasi;

    // Getters and Setters
}
