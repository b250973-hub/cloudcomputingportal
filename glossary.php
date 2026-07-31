<?php

$page_title = "Glossary";
include "header.php";


$glossary = array(
    "Cloud Computing" => "Delivery of computing services like servers, storage and software over the internet.",
    "IaaS" => "Infrastructure as a Service - renting virtual servers, storage and networks.",
    "PaaS" => "Platform as a Service - a ready platform to build and run applications.",
    "SaaS" => "Software as a Service - ready-to-use software available over the internet.",
    "Virtualization" => "Creating a virtual version of hardware like servers or storage using software.",
    "Virtual Machine (VM)" => "A software-based computer that runs on physical hardware, acting like a real computer.",
    "Data Center" => "A physical facility that stores servers and computing equipment used to run cloud services.",
    "Scalability" => "The ability of a system to handle increasing workload by adding resources.",
    "Elasticity" => "The ability to automatically increase or decrease resources based on demand.",
    "Multi-Tenancy" => "A software architecture where a single instance serves multiple customers (tenants).",
    "Public Cloud" => "Cloud services offered to the general public over the internet.",
    "Private Cloud" => "Cloud infrastructure used exclusively by one organization.",
    "Hybrid Cloud" => "A mix of public and private cloud environments used together.",
    "Load Balancing" => "Distributing network traffic across multiple servers to avoid overload.",
    "Latency" => "The time delay between sending a request and receiving a response over the network.",
    "API" => "Application Programming Interface - allows different software applications to communicate.",
    "Bandwidth" => "The amount of data that can be transferred over a network in a given time.",
    "Uptime" => "The amount of time a system or service is available and working properly.",
    "Downtime" => "The period when a system or service is unavailable or not working.",
    "Backup" => "A copy of data stored separately to restore information if the original is lost.",
    "Disaster Recovery" => "A plan and process to recover systems and data after a major failure.",
    "Encryption" => "Converting data into a coded form to prevent unauthorized access.",
    "Firewall" => "A security system that monitors and controls incoming and outgoing network traffic.",
    "CDN (Content Delivery Network)" => "A network of servers that deliver web content quickly to users based on location.",
    "Serverless Computing" => "A cloud model where the provider manages the server, and developers only write code."
);
?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="topic-badge">Glossary</span>
            <h2 class="section-title">Cloud Computing Glossary</h2>
            <p class="text-muted col-lg-8 mx-auto">Quick meanings of important cloud computing terms, useful for exams and interviews.</p>
        </div>

        <div class="row g-3">
            <?php foreach ($glossary as $term => $meaning) { ?>
                <div class="col-md-6">
                    <div class="card p-3">
                        <p class="glossary-term mb-1"><i class="bi bi-tag-fill"></i> <?php echo $term; ?></p>
                        <p class="mb-0 text-muted"><?php echo $meaning; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>
