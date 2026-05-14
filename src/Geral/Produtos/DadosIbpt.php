<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Dados do IBPT.
 *
 * @pw_element decimal $aliqFederal Carga tributária federal para os produtos nacionais.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element decimal $aliqEstadual Carga tributária estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element decimal $aliqMunicipal Carga tributária municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $fonte Fonte do IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $chave Número da versão do arquivo do IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $versao Versão da Tabela IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $valido_de Tabela do IBPT válilda a partir da data.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $valido_ate Tabela do IBPT valida até a data.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_complex dadosIbpt
 */
class DadosIbpt{
	/**
	 * Carga tributária federal para os produtos nacionais.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var decimal
	 */
	public float $aliqFederal;
	/**
	 * Carga tributária estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var decimal
	 */
	public float $aliqEstadual;
	/**
	 * Carga tributária municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var decimal
	 */
	public float $aliqMunicipal;
	/**
	 * Fonte do IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $fonte;
	/**
	 * Número da versão do arquivo do IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $chave;
	/**
	 * Versão da Tabela IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $versao;
	/**
	 * Tabela do IBPT válilda a partir da data.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $valido_de;
	/**
	 * Tabela do IBPT valida até a data.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $valido_ate;
}
