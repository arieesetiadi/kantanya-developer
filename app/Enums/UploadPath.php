<?php

namespace App\Enums;

enum UploadPath: string
{
    case SkillImages = '/images/skill';
    case ProjectImages = '/images/projects';
    case ResumeFiles = '/files/resumes';
}
