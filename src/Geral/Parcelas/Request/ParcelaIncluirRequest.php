<?php

namespace OmieLib\Geral\Parcelas\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Parcelas\Cadastros;
use OmieLib\Geral\Parcelas\ParcelasJsonClient;
use OmieLib\Geral\Parcelas\Response\ParcelaIncluirResponse;
use OmieLib\Geral\Parcelas\Response\ParcelaListarResponse;

/**
 * Solicitação da inclusão de uma parcela.
 *
 * @pw_element string $cParcela Descrição da parcela a ser criada<BR><BR>Possíveis formatos:<BR><BR>"10/20/30/40" - Com este tipo de formatação, o sistema entenderá que deve cadastrar 4 Parcelas. Sendo a primeira para 10 dias, a segunda para 20 dias e, assim, sucessivamente.<BR>"A Vista/40/60" - Nesta formatação, será cadastrada para 3 Parcelas. Sendo a primeira a vista, a segunda para 40 dias e, a terceira, para 60 dias.<BR>"Para 93 dias" - Com esse preenchimento, será cadastrada uma Parcela para 93 dias após o faturamento.<BR>"50" - Ao indicar um número único, o sistema entenderá que se trata da quantidade total de Parcelas. Neste caso, será cadastrado 50 Parcelas.
 * @pw_complex parcelaIncluirRequest
 */
class ParcelaIncluirRequest{
	/**
	 * Descrição da parcela a ser criada<BR><BR>Possíveis formatos:<BR><BR>"10/20/30/40" - Com este tipo de formatação, o sistema entenderá que deve cadastrar 4 Parcelas. Sendo a primeira para 10 dias, a segunda para 20 dias e, assim, sucessivamente.<BR>"A Vista/40/60" - Nesta formatação, será cadastrada para 3 Parcelas. Sendo a primeira a vista, a segunda para 40 dias e, a terceira, para 60 dias.<BR>"Para 93 dias" - Com esse preenchimento, será cadastrada uma Parcela para 93 dias após o faturamento.<BR>"50" - Ao indicar um número único, o sistema entenderá que se trata da quantidade total de Parcelas. Neste caso, será cadastrado 50 Parcelas.
	 *
	 * @var string
	 */
	public string $cParcela;
}
