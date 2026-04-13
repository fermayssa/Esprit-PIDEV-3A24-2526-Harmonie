import sys
import re

with open("templates/tache/index.html.twig", "r") as f:
    text = f.read()

# Make empty state have an 'Add' button
empty_state_A_FAIRE = """<div class="kan-empty-state" style="display:{% if columns.A_FAIRE|length > 0 %}none{% else %}flex{% endif %};">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    Aucune tâche ici
                    <button class="kan-col-add-btn js-kan-col-add" data-statut="A_FAIRE" style="margin-top:8px;font-size:12px;background:#f3f4f6;padding:4px 12px;border-radius:6px;color:#4b5563;">Ajouter une tâche</button>
                </div>"""

text = re.sub(r'<div class="kan-empty-state"[^>]*>\s*<svg.*?Aucune tâche ici\s*</div>', empty_state_A_FAIRE, text, count=1, flags=re.DOTALL)

empty_state_EN_COURS = empty_state_A_FAIRE.replace("A_FAIRE", "EN_COURS")
text = re.sub(r'<div class="kan-empty-state"[^>]*>\s*<svg.*?Aucune tâche ici\s*</div>', empty_state_EN_COURS, text, count=1, flags=re.DOTALL)

empty_state_TERMINEE = empty_state_A_FAIRE.replace("A_FAIRE", "TERMINEE")
text = re.sub(r'<div class="kan-empty-state"[^>]*>\s*<svg.*?Aucune tâche ici\s*</div>', empty_state_TERMINEE, text, count=1, flags=re.DOTALL)

with open("templates/tache/index.html.twig", "w") as f:
    f.write(text)
